var express = require('express');
var path = require('path');
var session = require('express-session');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');

require('dotenv').config();

var firebase = require('firebase-admin');
var serviceAccount = require("service-account-key.json");

firebase.initializeApp({
    credential: firebase.credential.cert(serviceAccount),
    databaseURL: "https://rrc-test-4a1b5.firebaseio.com"
});
// App consumer
// var config = {
//     apiKey: process.env.FIREBASE_API_KEY,
//     authDomain: process.env.FIREBASE_AUTH_DOMAIN + ".firebaseapp.com",
//     databaseURL: "https://" + process.env.FIREBASE_DATABASE_URL +".firebaseio.com",
//     projectId: process.env.FIREBASE_PROJECT_ID,
//     storageBucket: process.env.FIREBASE_STORAGE_BUCKET + ".appspot.com",
//     messagingSenderId: process.env.FIREBASE_MESSAGING_SENDER_ID
// };
// firebase.initializeApp(config);

var app = express();

var index = require('./routes/index');
var families = require('./routes/families')(firebase);
var users = require('./routes/users')(firebase);
var events = require('./routes/events')(firebase);
var points = require('./routes/points')(firebase);
var login = require('./routes/login')(firebase);

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

// uncomment after placing your favicon in /public
//app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(session({
    secret: "hash",
    resave: false,
    saveUninitialized: true,
    cookie: { secure: true }
}));

app.use(express.static(path.join(__dirname, 'public')));

app.use('/admin', index);
app.use('/admin/members', users);
app.use('/admin/events', events.router);
app.use('/admin/points', points);
app.use('/admin/families', families);
app.use('/admin/login', login);

// catch 404 and forward to error handler
app.use(function(req, res, next) {
    var err = new Error('Not Found');
    err.status = 404;
    next(err);
});

// error handler
app.use(function(err, req, res, next) {
    // set locals, only providing error in development
    res.locals.message = err.message;
    res.locals.error = req.app.get('env') === 'development' ? err : {};

    // render the error page
    res.status(err.status || 500);
    res.render('error');
});

module.exports = app;
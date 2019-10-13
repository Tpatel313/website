<?php $pageTitle = "Freshmen Cake Race"; ?>

<!DOCTYPE html>
<html>
<?php require "../partials/head.php" ?>

<body>
<?php require "../partials/public-header.php" ?>

<div class="container mb-3">
    <div class="row">
        <div class="col-12">
            <img class="img-fluid img-responsive" src="/homecoming/images/CakeRaceBanner.jpg">
        </div>
    </div>
</div>
<div class="container mb-3">
    <div class="row">
        <div class="col-4 text-center">
            <p class="mb-0" style="text-align:center"><a href="mailto:Isabel.Wickliffe@gatech.edu"><b>Isabel Wickliffe</b></a></p>
            <p class="mb-0" style="text-align:center"><i>Reck Club Homecoming Chair</i></p>
        </div>
        <div class="col-4 text-center">
            <p class="mb-0" style="text-align:center"><a href="mailto:haleyrmcelroy@gmail.com"><b>Haley McElroy</b></a></p>
            <p class="mb-0" style="text-align:center"><i>Cake Race Sub-Chair</i></p>
        </div>
        <div class="col-4 text-center">
            <p class="mb-0" style="text-align:center"><a href="mailto:brittanypowell@gatech.edu"><b>Brittany Powell</b></a></p>
            <p class="mb-0" style="text-align:center"><i>Cake Race Sub-Chair</i></p>
        </div>
    </div>
    <hr class="mb-3">
</div>

<div class="container">
    <div class='row text-center'>
        <div class='col-sm-4 col-xs-12 mb-3 mb-sm-0'>
            <a class='btn btn-md btn-primary' href="#race-day-logistics">Race Day Logistics</a>
        </div>
        <div class='col-sm-4 col-xs-12 mb-3 mb-sm-0'>
            <a class='btn btn-md btn-secondary' href="https://gatech.campuslabs.com/engage/submitter/form/start/338342">Sign Ups</a>
        </div>
        <div class='col-sm-4 col-xs-12 mb-sm-0'>
            <?php //If you change the name of the rules section further down, change the href here too. ?>
            <a class='btn btn-md btn-primary' href="#race-rules">Race Rules</a>
        </div>
    </div>
    <hr class="mb-3">
    <?php

    $info1 = array(
        [
            "image" => '/homecoming/images/fcr-001.jpg',
            "title" => 'The Tradition',
            "main" => 'The Freshmen Cake Race is a half-mile race held before sunrise on the morning of the Homecoming game every year. This unique long-standing tradition is open to <strong>first year</strong> Georgia Tech students. Each first year receives a cupcake at the end of the race. The male and female winners of the race receive a cake and are brought to the field during halftime of the Homecoming game where they are bestowed a kiss from Mr. and Ms. Georgia Tech. This race dates back to 1911, when the first Cake Race was held as an open cross-country run at Georgia Tech. Two years later, some of the faculty member’s wives started baking cakes for the winners, thus the name Cake Race was created. While the race’s original purpose was to scout men for the track team, today\'s participants are encouraged to run, jog, or walk. First years, sign up today to take part in one of Georgia Tech’s greatest traditions!'
        ],
        [
            "image" => '/homecoming/images/fcr-002.jpg',
            "title" => 'Sign Ups',
            "main" => 'All first years can sign up for the Freshmen Cake Race through October 25th at <a href="https://gatech.campuslabs.com/engage/submitter/form/start/338342">https://gatech.campuslabs.com/engage/submitter/form/start/338342</a>.'

        ],
        [
            "image" => '/homecoming/images/fcr-005.jpg',
            "title" => 'Race Bib Pickup',
            "main" => '<p><strong>All first years <i>MUST</i> be wearing a race bib in order to run.</strong> Each first year is responsible for picking up their race bib from any of the bib distribution locations below.</p><table class="table table-responsive"><tr> <th>Date</th> <th>Location</th> <th>Times</th> </tr> <tr> <td>Wednesday, October 30th</td> <td>East Campus Dorms</td> <td>10:00AM-3:00PM</td> </tr> <tr> <td>Thursday, October 31st</td> <td>West Campus Dorms</td> <td>10:00AM-3:00PM</td> </tr> <tr> <td>Friday, November 1st</td> <td>Skiles Walkway</td> <td>9:00AM-1:00PM</td> </tr> </table> <ul><li>You will need to bring your BuzzCard or another form of I.D. to pick up the race bib.</li> 
<li>Students are allowed to pick up another student’s race bib if they present the other student’s BuzzCard.</li> 
<li><strong>No race bibs will be distributed the morning of the race.</strong>
<li>The race bibs are to be worn on the front of the participant’s shirt and should be on by the time you arrive at the start line at 6:00AM.</li></ul> 
'
        ]
    );

    foreach ($info1 as $item) {
        echo "<div class='row mb-3'>";
        echo "<div class='col-md-5 col-sm-12'><img class= \"img-fluid mb-3 mb-md-0\" src=\"" . $item["image"] . "\"/></div>";
        echo "<div class='col-md-7 col-sm-12'>";
        echo "<h4>". $item["title"] . "</h4> " . $item['main'] . "</div>";
        echo "</div>";
    }
    ?>
</div>
<div class="container">

    <?php
    $info2 = array(
        [
            "image" => '/homecoming/images/fcr-map-2019.png',
            "title" => 'Racer Entry',
            "main" => '<i>When:</i> <strong>Saturday, November 2nd</strong>. All racers should arrive at <strong>6:00AM</strong>. The first heat will begin at <strong>6:30AM</strong>.\n<i>Where:</i> Racers should <strong>ENTER ON Techwood Drive</strong>, then <strong>turn left onto 6th St</strong>.\nThey will then be corralled into heats that line up starting at <strong>the intersection of Fowler St and 6th St</strong> and continuing back towards McCamish Pavilion.\nThe starting line of the race will be at <strong>the intersection of Fowler St and 6th St</strong>.'
        ],
        [
            "image" => '/homecoming/images/fcr-004.jpg',
            "title" => 'Clothing Recommendations',
            "main" => 'Be sure to wear tennis shoes/sneakers and clothes that you would be comfortable running or walking in. Remember, you are encouraged to run or walk at your own pace. Depending on the temperature, make sure to dress in clothes that will keep you warm (sweatshirt/jacket, pants, hats, gloves, etc).'
        ],
        [
            "image" => '/homecoming/images/fcr-003.jpg',
            "title" => 'Race Rules',
            "main" => '<ul><li>Participants must start the race at the designated start line.</li>
<li>No pushing or shoving is allowed during the race.</li>
<li>Students must wear their race bib for the entirety of the race.</li> 
<li>Race bibs must be visible and worn outside of clothing and blankets.</li> 
<li>Any student that is intoxicated will <strong>not</strong> be allowed to race.</li> 
<li>Students are not allowed to litter the trash from cupcakes and cakes.</li> 
</ul><p><strong>Any violations of these rules will result in disqualification of the participant and that participant’s organization will not receive points towards Homecoming. The violator’s organization will not be allowed to participate in Homecoming the following year.</strong> Violators will be brought to the Office of Student Integrity.</p>'
        ]
    );

    echo "<div class= 'blog-header'>";
    echo "<div class='col-12' style=\"text-align: center;\">";
    echo "<h1 id='race-day-logistics'>Race Day Logistics</h1></div></div><br>";


    foreach ($info2 as $item) {
        echo "<div class='row mb-3' id='" . str_ireplace(' ', '-', strtolower($item['title'])) ."'>";
        echo "<div class='col-md-5 col-sm-12'><img class= \"img-fluid mb-3 mb-md-0\" src=\"" . $item["image"] . "\"/></div>";
        echo "<div class='col-md-7 col-sm-12'>";
        echo "<h4>". $item["title"] . "</h4>";
        $lines = explode('\n', $item['main']);
        foreach ($lines as $line) {
            echo "<p> " . $line . "<p>";
        }
        echo "</div>";
        echo "</div>";
    }

    ?>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="text-muted"><i>Have any questions? Reach out to Isabel Wickliffe, Reck Club Homecoming Chair, at <a href="mailto:isabel.wickliffe@gatech.edu">isabel.wickliffe@gatech.edu</a>.</i></p>
        </div>
    </div>
</div>

<?php require "../partials/footer.php" ?>
<?php require "../partials/scripts.php" ?>
</body>

</html>
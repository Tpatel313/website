<?php $pageTitle = "Roster"; ?>
<?php require "../utils/array_formatter.php"; ?>

<!DOCTYPE html>
<html>
<?php require "../partials/head.php" ?>

<body>
<?php require "../partials/public-header.php" ?>
<div class="container">
    <h2 class="mb-3">2020 Roster</h2>
    <h4 class="mb-4">Executive Board</h4>
    <div class="row">
        <div class="col-md-6">
            <p><strong>Faculty Advisor:</strong> <a href="mailto:estephens34@gatech.edu">Gerome Stephens</a></p>
            <p><strong>Reck Driver:</strong> <a href="mailto:driver@reckclub.org">Ethan Rosman</a></p>
            <p><strong>President:</strong> <a href="mailto:president@reckclub.org">Jen O'Brien</a></p>
            <p><strong>Vice President:</strong> <a href="mailto:tgray43@gatech.edu">Taylor Gray</a></p>
        </div>
        <div class="col-md-6">
            <p><strong>Treasurer:</strong> <a href="mailto:treasurer@reckclub.org">Grace Mallon</a></p>
            <p><strong>Secretary:</strong> <a href="mailto:secretary@reckclub.org">Austin Gies</a></p>
            <p><strong>Member-at-Large:</strong> <a href="mailto:bthaler3@gatech.edu">Brendon Thaler</a></p>
            <p><strong>Member-at-Large:</strong> <a href="mailto:ewojack3@gatech.edu">Emma Wojack</a></p>
        </div>
    </div>
    <hr class="mb-3">
    <h4 class="mb-3">Chairs</h4>

    <div class="row mb-3">
        <?php $chairs = array(
            [
                "chair" => 'Alumni Relations',
                "name" => 'Sydney Weisenburger'
            ],
            [
                "chair" => 'Baseball',
                "name" => 'Brendan Mindiak'
            ],
            [
                "chair" => 'Basketball',
                "name" => 'Keshav Ramanathan'
            ],
            [
                "chair" => 'Big Buzz',
                "name" => 'Laura Hancher'
            ],
            [
                "chair" => 'Campus Outreach',
                "name" => 'Annie Robinson'
            ],
            [
                "chair" => 'Football',
                "name" => 'Adam Lederer'
            ],
            [
                "chair" => 'Fundraising',
                "name" => 'Brittany Ritter'
            ],
            [
                "chair" => 'Homecoming',
                "name" => 'McKade Stewart'
            ],
            [
                "chair" => 'Non-Revenue Sports',
                "name" => 'Ethan Kreager & Rachel Hurst'
            ],
            [
                "chair" => 'Public Relations',
                "name" => 'Ebie McDonnell'
            ],
            [
                "chair" => 'Probate Guide',
                "name" => 'Caroline Means'
            ],
            [
                "chair" => 'RECKruitment',
                "name" => 'Whitney Miller'
            ],
            [
                "chair" => 'T-Book',
                "name" => 'Isheeta Mukherjee'
            ],
            [
                "chair" => 'T-Night',
                "name" => 'Derek Prusener'
            ],
            [
                "chair" => 'Technology',
                "name" => 'Kirby Criswell'
            ],
            [
                "chair" => 'Traditions',
                "name" => 'Cade Lawson'
            ],
            [   "chair" => 'Diversity and Inclusion',
                "name" => 'Sofia Eidizadeh'
             ]);
        uasort($chairs, function($a, $b) {
            return $a["chair"] > $b["chair"];
        });
        chunkAndFormatArray($chairs, 2, function ($chunk) {
            echo "<div class=\"col-md-6 text-center\">";
            foreach ($chunk as $item) {
                echo "<p class='text-left'><strong>". $item["chair"] .":</strong> " . $item["name"] . "</p>";
            }
            echo "</div>";
        });

        ?>
    </div>
    <hr class="mb-3">
    <h4 class="mb-3">Members</h4>
    <div class="row">
        <?php
        $members = ['Abi Ivemeyer','Adam Lederer','Ally Rosenthal','Amanda Healy','Anilyn Benge','Annie Robinson', 'Austin Gies', 'Brandon Dobson','Brendan Mindiak', 'Brendon Thaler', 'Briana Sims', 'Brittany Ritter', 'Cade Lawson','Caroline Means', 'Carter Kubes', 'Dean Plaskon', 'Derek Prusener', 'Emma Wojack', 'Ethan Kreager','Ethan Rosman', 'Grace Mallon', 'Haley McElroy','Inika Jain','Isabelle Liffiton', 'Isheeta Mukherjee', 'Jack Crawford', 'Jacob Lewis', 'Jake Grant', 'Jen O\'Brien', 'Jill Riley','Kassie Lee', 'Katie Earles', 'Keshav Ramanathan', 'Kevin Hopper', 'Kirby Criswell', 'Marissa Klee', 'McKade Stewart', 'Nick Isaf','Paul Weiland', 'Ross LeRoy','Samantha White','Sofia Eidizadeh','Sydney Weisenburger', 'Taylor Gray', 'Whitney Miller', 'Zach Bellis'];
        sort($members);
        chunkAndFormatArray($members, 6, function ($chunk) {
            echo "<div class=\"col-md-2 text-center\">";
            foreach ($chunk as $item) {
                echo "<p class='text-left'>" . $item . "</p>";
            }
            echo "</div>";
        });
        ?>
    </div>
    <hr class="mb-3">
    <h4 class="mb-4">Probates</h4>
    <div class="row mb-3">
        <?php
        $probates = [ ];
        sort($probates);
        chunkAndFormatArray($probates,4, function ($chunk) {
            echo "<div class=\"col-md-3 text-center\">";
            foreach ($chunk as $item) {
                echo "<p class='text-left'>" . $item . "</p>";
            }
            echo "</div>";
        });
        ?>
    </div>
    <hr class="mb-3">
</div>

<?php require "../partials/footer.php" ?>
<?php require "../partials/scripts.php" ?>
</body>

</html>

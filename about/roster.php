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
            <p><strong>Reck Driver:</strong> <a href="mailto:driver@reckclub.org">Abi Ivemeyer</a></p>
            <p><strong>President:</strong> <a href="mailto:president@reckclub.org">Cade Lawson</a></p>
            <p><strong>Vice President:</strong> <a href="mailto:ethanrosman@gatech.edu">Ethan Rosman</a></p>
        </div>
        <div class="col-md-6">
            <p><strong>Treasurer:</strong> <a href="mailto:treasurer@reckclub.org">Derek Prusener</a></p>
            <p><strong>Secretary:</strong> <a href="mailto:secretary@reckclub.org">Jen O'Brien</a></p>
            <p><strong>Member-at-Large:</strong> <a href="mailto:wmiller48@gatech.edu">Whitney Miller</a></p>
            <p><strong>Member-at-Large:</strong> <a href="mailto:haleyrmcelroy@gmail.com">Haley McElroy</a></p>
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
                "name" => 'Adam Lederer'
            ],
            [
                "chair" => 'Big Buzz',
                "name" => 'Laura Hancher'
            ],
            [
                "chair" => 'Campus Outreach',
                "name" => 'Diana Michael'
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
                "chair" => 'Probatemaster',
                "name" => 'Caroline Means'
            ],
            [
                "chair" => 'RECKruitment',
                "name" => 'Kassie Lee'
            ],
            [
                "chair" => 'T-Book',
                "name" => 'Katie Earles'
            ],
            [
                "chair" => 'T-Night',
                "name" => 'Jack Crawford'
            ],
            [
                "chair" => 'Technology',
                "name" => 'Kirby Criswell'
            ],
            [
                "chair" => 'Traditions',
                "name" => 'Ally Rosenthal'
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
        $members = ['Abi Ivemeyer','Adam Lederer','Ally Rosenthal','Amanda Healy','Annie Robinson', 'Brandon Dobson','Brayton Miles','Brendan Mindiak','Brittany Ritter', 'Cade Lawson','Caroline Means','Dean Plaskon', 'Derek Prusener','Diana Michael', 'Ebie McDonnell', 'Ethan Kreager','Ethan Rosman','Haley McElroy','Inika Jain','Isabelle Liffiton', 'Jack Crawford', 'Jake Grant', 'Jen O\'Brien', 'Jill Riley','Kassie Lee', 'Katie Coveny','Katie Earles', 'Kirby Criswell', 'Laura Hancher', 'Marissa Klee', 'McKade Stewart', 'Rachel Hurst','Ronnie Ludwin','Samantha White','Sydney Weisenburger','Whitney Miller'];
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
        $probates = ['Andy Begazo','Anilyn Benge','Austin Gies','Brendon Thaler', 'Briana Sims','Carter Kubes','Emma Wojack','Grace Mallon', 'Isheeta Mukherjee', 'Jacob Lewis','Keshav Ramanathan','Kevin Hopper','Nick Isaf', 'Paul Weiland', 'Ross LeRoy','Sofia Eidizadeh', 'Tae Kim', 'Taylor Gray', 'Zach Bellis'];
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

<?php $pageTitle = "Roster"; ?>
<?php require "../utils/array_formatter.php"; ?>

<!DOCTYPE html>
<html>
<?php require "../partials/head.php" ?>

<body>
<?php require "../partials/public-header.php" ?>
<div class="container">
    <h2 class="mb-3">2023 Roster</h2>
    <h4 class="mb-4">Executive Board</h4>
    <div class="row">
        <div class="col-md-6">
            <p><strong>Faculty Advisor:</strong> <a href="mailto:estephens34@gatech.edu">Gerome Stephens</a></p>
            <p><strong>Reck Driver:</strong> <a href="mailto:driver@reckclub.org">Omar Khan</a></p>
            <p><strong>President:</strong> <a href="mailto:president@reckclub.org">Josh Fernandes</a></p>
            <p><strong>Vice President:</strong> <a href="mailto:areitano3@gatech.edu">Austin Reitano</a></p>
        </div>
        <div class="col-md-6">
            <p><strong>Treasurer:</strong> <a href="mailto:treasurer@reckclub.org">Simran Patel</a></p>
            <p><strong>Secretary:</strong> <a href="mailto:secretary@reckclub.org">Gal Ovadia</a></p>
            <p><strong>Member-at-Large:</strong> <a href="mailto:aronco6@gatech.edu">Ainsley Ronco</a></p>
            <p><strong>Member-at-Large:</strong> <a href="mailto:mguthrie31@gatech.edu">Miriam Guthrie</a></p>
        </div>
    </div>
    <hr class="mb-3">
    <h4 class="mb-3">Chairs</h4>

    <div class="row mb-3">
        <?php $chairs = array(
            [
                "chair" => 'Alumni Relations',
                "name" => 'Aggie Fowler'
            ],
            [
                "chair" => 'Baseball',
                "name" => 'Michael DuBose'
            ],
            [
                "chair" => 'Basketball',
                "name" => 'Madison Meyers'
            ],
            [
                "chair" => 'Big Buzz',
                "name" => 'Joey D\'Adamio'
            ],
            [
                "chair" => 'Campus Outreach',
                "name" => 'Sam Auborn'
            ],
            [
                "chair" => 'Fundraising',
                "name" => 'Matthew Kistner'
            ],
            [
                "chair" => 'Football',
                "name" => 'Susannah Gordon'
            ],
            [
                "chair" => 'Homecoming',
                "name" => 'Bethany McMorris'
            ],
            [
                "chair" => 'Non-Revenue Sports',
                "name" => 'Connor White'
            ],
            [
                "chair" => 'Public Relations',
                "name" => 'Nisha Rockwell'
            ],
            [
                "chair" => 'Probate Guides',
                "name" => 'Eleanor Froula and Jordan Lawson'
            ],
            [
                "chair" => 'RECKruitment',
                "name" => 'Charlie Hammer and Keshav Ramanathan'
            ],
            [
                "chair" => 'T-Book',
                "name" => 'Matthew Aronin'
            ],
            [
                "chair" => 'T-Night',
                "name" => 'Suraya John'
            ],
            [
                "chair" => 'Technology',
                "name" => 'Tirth Patel'
            ],
            [
                "chair" => 'Traditions',
                "name" => 'Reid Spencer'
            ],
            [   "chair" => 'Diversity and Inclusion',
                "name" => 'Rohan Raman'
             ]);
        uasort($chairs, function($a, $b) {
            if ($a["chair"] > $b["chair"]) {
                return 1;
            } elseif ($a["chair"] < $b["chair"]){
                return -1;
            } else {
                return 0;
            }
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
    <div class="row mb-3">
    <?php
  $members = ['Andreea Juravschi', 'Andrew Norlin', 'Austin Gies', 'Austin Reitano', 'Bethany McMorris', 'Brendan Mindiak', 'Carter Kubes', 'Charlie Hammer', 'Eleanor Froula', 'Erin Prusener', 'Evalyn Edwards', 'Grace Mallon', 'Joey D\'Adamio', 'Jonathan Brooks', 'Jordan Lawson', 'Josh Fernandes', 'Keshav Ramanathan', 'Madison Meyers', 'Melissa Braunstein', 'Reid Spencer', 'Sarah Wiedetz', 'Shawn McKelvey', 'Sofia Eidizadeh', 'Sumayyah Ahmed', 'Will Hancock', 'Abby Hart', 'Agatha Fowler', 'Ainsley Ronco', 'Ajay Mathur', 'Allie Abbott', 'Bo Miller', 'Carolyn Braun', 'Connor White', 'Gabriel Armstrong', 'Gal Ovadia', 'Kate Schutz', 'Matthew Aronin', 'Matthew Kistner', 'Michael DuBose', 'Miriam Guthrie', 'Trey Dobson', 'Nisha Rockwell', 'Omar Khan', 'Rohan Raman', 'Samuel Auborn', 'Sean Alexander', 'Simran Patel', 'Suraya John', 'Susannah Gordon', 'Tirth Patel', 'Toral Patel'];
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
    <h4 class="mb-3">Probates</h4>
    <div class="row mb-3">
        <?php
        $probates = ['PC23 coming soon!'];
        sort($probates);
        chunkAndFormatArray($probates,6, function ($chunk) {
            echo "<div class=\"col-md-2 text-center\">";
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

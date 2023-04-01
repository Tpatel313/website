<?php
require "logged_in_check.php";
require "database_connect.php";
require "set_session_vars_short.php";
$pageTitle = "All Time Events";
?>

<?php

$query = $db->prepare("SELECT memberID FROM Member");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_COLUMN);
$eventCounts = array();
if (count($result) > 0) {
    foreach($result as $key=>$id){
        $query = $db->prepare("SELECT firstName, lastName FROM Member WHERE memberID=:id");
        $query->execute(array('id'=>$id));
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $row = $query->fetch();
        $FirstName = $row['firstName'];
        $LastName = $row['lastName'];
        $attendanceQuery = $db->prepare("SELECT eventId from reck_club.AttendsEvent WHERE memberID=:id");
        $attendanceQuery->execute(array('id'=>$id));
        $attendanceQuery->setFetchMode(PDO::FETCH_ASSOC);
        $eventIds = [];
        while ($row = $attendanceQuery->fetch()) {
            $eventIds[] = $row['eventId'];
        }
        $eventCounts[sizeof($eventIds)] = array($id, $FirstName, $LastName);
    }
}
krsort($eventCounts, 1);
?>

<!DOCTYPE html>
<html>
<?php require "partials/head.php"; ?>
<body>
<?php require "partials/header.php"; ?>

<div class="container">
    <div class="row mb-3">
        <div class="col-12">
            <table class="table table-hover table-sm mb-3">
                <?php
                if (sizeof($eventCounts) > 0) {
                    echo "<thead><tr><th>Rank</th><th>Member</th><th>Total Events Attended</th></tr></thead>";
                    echo "<tbody>";
                    $count = 1;
                    foreach ($eventCounts as $key => $eventCount) {
                        $totalEvents = $key;
                        $firstName = $eventCount[1];
                        $lastName = $eventCount[2];
                        $name = $firstName . ' ' . $lastName;
                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . $name . "</td>";
                        echo "<td>" . $totalEvents . "</td></tr>";
                        $count++;
                    }
                    echo "</tbody>";
                } else {
                    echo "<tbody><tr><td>No events attended.</td></tr></tbody>";
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php require "partials/footer.php"; ?>
<?php require "partials/scripts.php"; ?>
</body>

</html>
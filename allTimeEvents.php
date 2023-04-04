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
        $firstEventId = 1000000000000;
        $lastEventId = 0;
        while ($row = $attendanceQuery->fetch()) {
            $eventId = $row['eventId'];
            if ($eventId < 9875) { // Events started at ID 9875, went up to 12815, then started again at 1
                $eventId = $eventId+12815; // This is done to account for people who did events before and after 12815
            } // Note this will not work when events reach 9875 again
            if ($eventId<$firstEventId) {
                $firstEventId = $eventId;
            }
            if ($eventId>$lastEventId) {
                $lastEventId = $eventId;
            }
            $eventIds[] = $eventId;
        }
        $totalPossibleEvents = $lastEventId-$firstEventId+1;
        $eventCounts[sizeof($eventIds)] = array($id, $FirstName, $LastName, $totalPossibleEvents);
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
    <h2>All-Time Events Top 100</h2>
</div>
<div class="container">
    <div class="row mb-3">
        <div class="col-12">
            <table class="table table-hover table-sm mb-3">
                <?php
                if (sizeof($eventCounts) > 0) {
                    echo "<thead><tr><th>Rank</th><th>Member</th><th>Events Attended/Events Possible</th></tr></thead>";
                    echo "<tbody>";
                    $count = 1;
                    foreach ($eventCounts as $key => $eventCount) {
                        if ($count==101) {
                            break; // Only show the top 100...Helping performance for future
                        }
                        $totalEvents = $key;
                        $memberId = $eventCount[0];
                        $firstName = $eventCount[1];
                        $lastName = $eventCount[2];
                        $totalPossibleEvents = $eventCount[3];
                        $name = $firstName . ' ' . $lastName;
                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . '<a href="/memberProfile.php?memberId=' . $memberId . '">' . $name . '</a>' . "</td>";
                        $eventPct= number_format(($totalEvents/$totalPossibleEvents)*100,1);
                        echo "<td>" . $totalEvents . "/" . $totalPossibleEvents . " (" . $eventPct . "%)</td></tr>";
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
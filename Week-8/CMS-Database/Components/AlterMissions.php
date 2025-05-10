<?php

include("sqlconnect.php");
header("Location: http://localhost/Week-8/CMS-Database/EditMissions.php");

$missionName = $_POST['missionName'];
$missionDate = $_POST['missionDate'];
$missionID = $_POST['MissionID'];

if(isset($_POST['international']) && $_POST['international']== 'Yes'){
    $international = 1;
}else{
    $international = 0;
}

if($_POST['action'] == 'Edit') {
    $query = "UPDATE Missions SET MissionName = '$missionName', MissionDate = '$missionDate', InCountry = $international  WHERE MissionName = '$missionID'";
    $conn->query($query);
}elseif ($_POST['action'] == 'Delete') {
    $query = "DELETE FROM Missions WHERE MissionName = '$missionID'";
    $conn->query($query);
}
elseif ($_POST['action' == 'Add']){
    $query = "INSERT INTO Missions(MissionName, MissionDate, InCountry) VALUES ('$missionName', '$missionDate', '$international')";
    $conn->query($query);
}

?>
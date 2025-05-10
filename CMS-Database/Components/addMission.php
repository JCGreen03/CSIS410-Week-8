<?php
include("sqlconnect.php");
header("Location: http://localhost/Week-8/CMS-Database/EditMissions.php");

$missionName = $_POST['missionName'];
$missionDate = $_POST['missionDate'];

if(isset($_POST['international']) && $_POST['international']== 'Yes'){
    $international = 1;
}else{
    $international = 0;
}

$query = "INSERT INTO Missions(MissionName, MissionDate, InCountry) VALUES ('$missionName', '$missionDate', '$international')";
$conn->query($query);
?>
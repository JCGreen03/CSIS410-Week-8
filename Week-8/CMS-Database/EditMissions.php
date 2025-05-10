<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Edit Missions</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>

<body>
<?php 
session_start();
include("./Components/sqlconnect.php");
require './Components/validateMissions.php';
include("./Components/Header.php");
?>

<?php
$nationalQuery = "SELECT * FROM Missions WHERE InCountry=0;";
$internationalQuery = "SELECT * FROM Missions WHERE InCountry=1;";
$allQuery = "SELECT * FROM Missions";

$national = $conn->query($nationalQuery);
$international = $conn->query($internationalQuery);
$allMissions = $conn->query($allQuery);


if(!isset($_SESSION['accesslevel']) || $_SESSION['accesslevel'] < 2){
    echo 'Access Denied. If you have proper credentials, log in.';
}
elseif($_SESSION['accesslevel'] > 1){
    echo '
    <table class="MissionsCMSTable">
    <caption>National Missions</caption>
            <th>Mission Name</th>
            <th>Mission Date</th>
            <th></th>
        </tr>
    ';
    if($national->num_rows > 0){
        while($rows = $national->fetch_assoc()){
            echo '<tr>';
            echo "<td>" . $rows['MissionName'] . "</td>";
            echo "<td>" . $rows['MissionDate'] . "</td>";
            echo '</tr>';
        }

        echo '</table>';
        }

    echo '
        <table class="MissionsCMSTable">
        <caption>International Missions</caption>
                <th>Mission Name</th>
                <th>Mission Date</th>
                <th></th>
            </tr>
        ';

    if($international->num_rows > 0){
        while($rows = $international->fetch_assoc()){
                echo '<tr>';
                echo "<td>" . $rows['MissionName'] . "</td>";
                echo "<td>" . $rows['MissionDate'] . "</td>";
                echo '</tr>';
            }
            echo '</table>';
            }
            
            if($_SESSION['accesslevel'] ==3){
            }
    }

?>
<?php
echo '<form action="./Components/AlterMissions.php" method="post">';

echo"
<div class='editMissionsform'>
    <label for='MissionID' >Edit a Mission:</label>
    <select name='MissionID'>
    <option name='placeholder'>Select a Mission</option>
    ";

if($allMissions->num_rows > 0){
    while($rows = $allMissions->fetch_assoc()){
       echo "<option name='MissionID' value='".$rows['MissionName']."'>";
       echo $rows['MissionName'];
       echo "</option>";
    }
}
echo "</select><br>";

echo 
   '
   Mission name and brief description: <input type="text" name="missionName"><br>
    Mission date<input type="date" name="missionDate"><br>
    International? <input type="checkbox" name="international" value="Yes"><br>';

    echo "<input type='submit' name='action' value='Edit'><br>";
    echo "<input type='submit' name='action' value='Submit as new mission'><br>";

    if($_SESSION['accesslevel'] == 3){
    echo"<input type='submit' name='action' value='Delete'>";
    }
echo "</form>";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = validateForm($_POST);

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<p style='color:green;'>Submitted successfully!</p>";
    }
}
echo "</div>";
?>

<?php
include("./Components/Footer.php")
?>
</body>
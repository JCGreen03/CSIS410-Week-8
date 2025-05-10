<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Database - Our Team</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>

<body>
    <!--Page 3: Employee page
Todo: Wrap everything in a nice, RDBMS bow
-->

<?php 
session_start();
include("./Components/sqlconnect.php");
include("./Components/Header.php");
?>

<?php
if(isset($_SESSION['accesslevel']) && $_SESSION['accesslevel'] > 1){
   echo '<a href="EditEmployees.php" class="founderlink">Edit Page</a>';
}
?>

<?php
$query = "SELECT * FROM Employees";
$employees = $conn->query($query);

if($employees->num_rows > 0){
    while($rows=$employees->fetch_assoc()){
        echo '<div class="heirarchybox">';
        include("./Components/employeeInfo.php");
        echo '</div>';
    }
}
?>

<?php include("./Components/Menu.php"); ?>

<?php include("./Components/Footer.php");?>



</body>
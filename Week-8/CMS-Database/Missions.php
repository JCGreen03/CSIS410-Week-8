<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Missions</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>

<body>
    <!--Page 5: Mission details page
Contains:
Information on the missions
Links to volunteer page
Links to socials

TODO: Reformat all components to use DB - DONE

-->

<?php 
session_start();
include("./Components/sqlconnect.php");
include("./Components/Header.php");
?>
<div class="title">

<?php
//Insert Publisher/Admin menu link
if(isset($_SESSION['accesslevel']) && $_SESSION['accesslevel'] > 1){
    echo '<a class="founderlink" href="EditMissions.php">Edit Page</a>';
}
?>

<h1>Building A Better World Through Ministry</h1>
<p>"...go and make disciples of all nations, baptizing them in the name of the Father and of the Son and of the Holy Spirit"</p>
</div>

<div class="title"><h1>Upcoming Missions</h1></div>

<div class="missiongrid">

<div class="center">

<div class="national">
<h3>National Missions</h3>
<?php
include("./Components/nationalMissionsList.php")
?>
    </div>
</div>

<div class="center">
<div class="international">

<h3>International Missions</h3>
<?php
include("./Components/internationalMissionsList.php")
?>
    </div>
</div>

</div>

<div class="center">
<h1>Other Ways You Can Make A Difference</h1>

<?php
include("./Components/MeetingBTN.php");

include("./Components/DonateBTN.php");

include("./Components/VolunteerBTN.php");
?>
</div> 
<?php 
include("./Components/Menu.php");
include("./Components/Footer.php");
?>
</body>


</body>
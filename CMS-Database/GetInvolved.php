<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Get Involved</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>

<body>
    <!--Page 8: Volunteer page
Contains:
Information on volunteer
Volunteer information submission Form

TODO: fill with content - DONE
TODO: Format and style - DONE
TODO: Create form - DONE
TODO: Form validation - DONE
-->

<?php 
session_start();
include("./Components/Header.php");
?>
<div>
<h1>Impacting Your Local Community</h1>
<p>"Verse about local work"</p>
</div>


<!--Form to find volunteer opportunities. -->

<div class="formMapGrid">
    <div class="form volunteerform">
    <?php include("./Components/VolunteerForm.php"); ?>
    </div>
    <div class="map">
        <p>Placeholder image example of interactable map that would change based on the input in the form.</p>
        <img class="mapimg" src="./Media/streetviewnew.jpg" alt="US Map">
    </div>
</div>

<hr>
<h1>Other Ways You Can Make A Difference</h1>

<?php
include("./Components/MeetingBTN.php");

include("./Components/DonateBTN.php");
?>

<?php 
include("./Components/Menu.php");
include("./Components/Footer.php");
?>
</body>
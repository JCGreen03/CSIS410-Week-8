<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Contact Us</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>

<body>
    <!--Page 6: Contact page
Contains:
Information on the team
Links to individual employee pages

TODO: fill with content - DONE
TODO: Format and style - DONE
TODO: Link to pages - DONE
TODO: Form validation - DONE

page links:
Volunteer
Donate
-->

<?php session_start(); ?>


<?php include("./Components/Header.php");?>

<h2>Set up a meeting</h2>
<p>Arrange a meeting with one of our team leads for your next event</p><br>

<div class="coordinators">

<div class="coordinatorbox">
<img class="coordinatorimg" src="./Media/Theo.jpg" alt="Theo">
<p>Lead Event Coordinator - Theodore Poljak</p>
</div>

<div class="coordinatorbox">
<img class="coordinatorimg" src="./Media/Lucas.jpg" alt="Lucas">
<p>Lead Missions Director - Lucas McGonnal</p>
</div>



</div>


<div class='contribute'>
<h1>Reach out to us here</h1>
<div class="Coordinatorform">
<?php include("./Components/ContactForm.php"); ?>
</div>
<hr>
<div class="contribute">
<h1>Other Ways to Contribute</h1>

<?php
include("./Components/VolunteerBTN.php");

include("./Components/DonateBTN.php");
?>

<?php
include("./Components/Menu.php");

include("./Components/Footer.php"); 
?>
</div>


</body>
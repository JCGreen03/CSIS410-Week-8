<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Donate</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>

<body>
    <!--Page 8: Donation page
Contains:
Information on donation
Donation submission Form

TODO: fill with content - DONE
TODO: Format and style - DONE
TODO: Create form - DONE
TODO: Form validation - DONE
-->
<?php
session_start();
include("./Components/Header.php");
?>

<div class="donationtitle">
<h1>Set up a recurring donation</h1>
<p>Set up a yearly, monthly, or even weekly donation to our cause!</p>
</div>

<div class="donationform">
    <?php include("./Components/DonationForm.php"); ?>
</div>

<hr>
<h1>Other Ways You Can Make A Difference</h1>

<?php
include("./Components/MeetingBTN.php");

include("./Components/VolunteerBTN.php");
?>
<?php 
include("./Components/Menu.php");
include("./Components/Footer.php");
?>

</body>
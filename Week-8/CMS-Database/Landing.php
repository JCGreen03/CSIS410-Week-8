<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Landing</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>

<?php
session_start();
?>
<?php include("./Components/HomeHeader.php"); ?>
<img class="homelogo" src="./Media/NewlyRisenLogo.png" alt="Logo">

<h2 class="landingsections">A Mission From God</h2>


<div class="pic-ctn">
<img class="homeimg" src="./Media/Landing/slideshow_landing/Golgotha.jpg" alt="Golgotha w/ cross" class="pic">
<img class="homeimg" src="./Media/Landing/slideshow_landing/prayer_1.jpg" alt="Group Praying" class="pic">
<img class="homeimg" src="./Media/Landing/slideshow_landing/social_1.jpg" alt="Volunteer and child smiling" class="pic">
<img class="homeimg" src="./Media/Landing/slideshow_landing/volunteering_1.jpg" alt="Giving out food" class="pic">
</div>


<h2 class="landingsections">Over 50 Missions a year, 200 volunteers, and 500 people brought to Christ</h2>

<img class="homelogo" src="./Media/Landing/collage.png" alt="collage of mission work">

<h2 class="landingsections"> check out our social media to stay updated on current trips and upcoming events!</h2>

<!--FB, IG, X icons arranged in triangle-->
<div class="icongrid">
    <div class="icondiv1">
        <img class="icon" src="./Media/facebook.png" alt="facebook">
    </div>

    <div class="icondiv2">
        <img class="icon" src="./Media/instagram.png" alt="instagram">
    </div>

    <div class="icondiv3">
        <img class="icon" src="./Media/twitter.png" alt="X (formerly twitter)">
    </div>
</div>
<!--Create site menu-->
<?php include("./Components/Menu.php"); ?>

<?php include("./Components/Footer.php"); ?>  
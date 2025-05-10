<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - About</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>

<body>

<!--Page 2: About page
Contains:
Information on who we are
Information on founder
Links to volunteer/missions & Contact page

TODO: Format and style - DONE
TODO: Link to pages - DONE

Page links:
Contact
-->

    <?php session_start(); ?>

    <?php include("./Components/Header.php"); ?>
<div class="center">
    <h1>Who We Are</h1>

    <h2>At The Newly Risen, we are dedicated to serving the global community in the name of our Lord and Savior, Jesus Christ.</h2>
</div>
    <div class="centerimg sidebyside">
    <img class="aboutimg" src="./Media/missions.png" alt="globe with a plane">
    <img class="aboutimg" src="./Media/Landing/slideshow_landing/prayer_1.jpg" alt="prayer">
    <img class="aboutimg" src="./Media/Landing/slideshow_landing/social_1.jpg" alt="social">
    </div>
<div class="center">
    <h1>Our Founder</h1>
    <h2>In 2015, Guy Mann experienced the transformative power of Christ, and has since dedicated his life to reaching those living in less fortunate positions</h2>
    </div>
    <div class="centerimg">

    <a class="founderlink" href="guy.php"><img class="aboutimg founderbox" src="./Media/Guy.jpg" alt="Guy Mann"><h2>Guy Mann</h2></a>

    </div>
<div class="center">
    <h1>How You Can Get Involved</h>

    <h2>In the past decade, we have done over 400 mission trips both inside and outside the US. </h2>
    </div>
    <div class="centerimg">
    <a href="Contact.php" class="button">See how you can get involved!</a>
    </div>

    <?php include("./Components/Menu.php"); ?>

    <?php include("./Components/Footer.php"); ?>
</body>
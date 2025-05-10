<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - About</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>


<!--
TODO: Reformat all components to use DB
-->

<body>
<?php session_start(); ?>

<?php include("./Components/Header.php"); ?>

<?php
if(isset($_SESSION['valid']) && $_SESSION['valid']){
    echo 'Currently logged in as: ' . $_SESSION['username'] . '<br>';
    echo 'Access Level: level ' . $_SESSION["accesslevel"];
    }else{
        echo 'please log in to view profile.';
    }

?>


<?php include("./Components/Menu.php"); ?>

<?php include("./Components/Footer.php"); ?>
</body>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Contact Us</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <!--Page 7: Login page

Contains:
Form to log in with

TODO: Reformat all components to use DB
-->

<?php 
session_start();
include("./Components/Header.php");
?>

<?php include("./Components/loginform.php");?>

<?php 
include("./Components/Footer.php");
?>
</body>
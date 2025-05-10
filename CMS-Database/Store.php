<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Store</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>

<body>

<?php 
session_start();
include("./Components/Header.php"); ?>

<?php
if(isset($_SESSION['valid']) && $_SESSION['valid']){
echo '<a class="founderlink" href="Cart.php">Cart</a>';
}else{
    echo 'please log in to begin a cart.';
}
?>

<h2>Section 1: Personal use items</h2>
<div class="section1">
    <a class="founderlink" href="itemPage.php?item=0">
    <div class="sec1item1">
    <img class= "storeimg"src="./Media/product_shirt.png" alt="shirt with logo">
        <p>T-shirt</p>
        <p>$23.99</p>
    </div>
    </a>

<div class="sec1item2">
<a class="founderlink" href="itemPage.php?item=1">
    <img class= "storeimg"src="./Media/product_hat.png" alt="hat with logo">
    <p>Hat</p>
    <p>$14.99</p>
    </a>
</div>

<div class="sec1item3">
<a class="founderlink" href="itemPage.php?item=2">
<img class= "storeimg" src="./Media/multilingual-new-testament_469558-40779.jpg" alt="Multi-language new Testament">
    <p>Mutlilingual New Testament</p>
    <p>$14.99</p>
    </a>
</div>

<div class="sec1item4">
<a class="founderlink" href="itemPage.php?item=3">
<img class= "storeimg"src="./Media/wall-calendar-3-710.png" alt="hat with logo">
    <p>Missions Calendar</p>
    <p>$14.99</p>
    </a>
</div>

<div class="sec1item5">
<a class="founderlink" href="itemPage.php?item=4">
<img class= "storeimg"src="./Media/product_waterbottle.png" alt="water bottle with logo">
    <p>Water bottle</p>
    <p>$19.99</p>
    </a>
</div>

<div class="sec1item6">
<a class="founderlink" href="itemPage.php?item=5">
<img class= "storeimg"src="./Media/images.jfif" alt="devotional kit">
<p>Devotional Kit</p>
<p>$14.99</p>
</a>
</div>

</div>

<h2>Section 2: Event Rentals</h2>

<div class="section2">

<div class="sec2item1">
<a class="founderlink" href="itemPage.php?item=6">
    <img class= "storeimg"src="./Media/lights.jpg" alt="Lights">
    <p>Lights</p>
    <p>$150 - Click Rental Detials</p>
    </a>
</div>

<div class="sec2item2">
<a class="founderlink" href="itemPage.php?item=7">
    <img class= "storeimg"src="./Media/canopy.webp" alt="Canopy">
    <p>Canopy</p>
    <p>$250 - Click Rental Detials</p>
    </a>
</div>

<div class="sec2item3">
<a class="founderlink" href="itemPage.php?item=8">
    <img class= "storeimg"src="./Media/foodwarmer.webp" alt="Food warmer">
    <p>Food Warmer</p>
    <p>$350 - Click Rental Detials</p>
    </a>
</div>

<div class="sec2item4">
<a class="founderlink" href="itemPage.php?item=9">
    <img class= "storeimg"src="./Media/generator.jpg" alt="Generator">
    <p>Generator</p>
    <p>$50 - Click Rental Detials</p>
    </a>
</div>

</div>

<?php include ("./Components/Menu.php"); ?>
<?php include("./Components/Footer.php"); ?>
</body>
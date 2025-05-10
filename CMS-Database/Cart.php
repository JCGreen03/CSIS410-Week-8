<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Cart</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>

<body>
    <!--Page 10: Cart page
Contains:
All items in cart incl price
Continue to checkout button
remove item button
clear cart button

TODO: Reformat all components to use DB
-->

<?php
session_start();
include("./Components/Header.php");
include("./Components/CartVars.php");
?>


<a class="founderlink"href="http://localhost/Week-5/CMS-Sessions/Store.php">Back to store</a>

<ul> <h1>CART</h1>
<?php

if(isset($_SESSION['cartActive']) && $_SESSION['cartActive']){
    for($i=0; $i<sizeof($_SESSION['itemQTY']); $i++){
        if(isset($_SESSION['itemQTY']) && $_SESSION['itemQTY'][$i] != 0){
        echo "<li>" . $itemName[$i] . " x " . $_SESSION['itemQTY'][$i] . "..... $" . ($cost[$i]*$_SESSION['itemQTY'][$i]). "</li>";
        if (isset($ids[$i])) {
            echo 
            "<form action='./Components/removefromcart.php' method='post'>
                <input type='hidden' name='itemid' value='$ids[$i]'>
                <input type='submit' value='remove from cart'>
            </form> <br>";
        }
        }
    }
}
?>
</ul>

<br>


<form action="Checkout.php" method="post">
    <input type="submit" value="Checkout">
</form>

<form action="./Components/clearcart.php" method="post">
    <input type="submit" value="clear cart">
</form>

<?php include ("./Components/menu.php"); ?>
<?php include("./Components/Footer.php"); ?>

</body>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Checkout</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>

<body>
    <!--Page 11: checkout page
Contains:
All items in cart incl price
Continue to payment button
clear cart button

TODO: Reformat all components and php (34-45) to use DB

Page links:
return to cart
return to store
-->

<?php
session_start();
include("./Components/Header.php");
include("./Components/CartVars.php");
$total = 0.0;
?>
<a class="founderlink"href="http://localhost/Week-5/CMS-Sessions/Store.php">Back to store</a>

<h1>CHECKOUT</h1>

<?php
if(isset($_SESSION['cartActive']) && $_SESSION['cartActive']){
    for($i=0; $i<sizeof($_SESSION['itemQTY']); $i++){
        $peritemcost = ($cost[$i]*$_SESSION['itemQTY'][$i]);
        if($_SESSION['itemQTY'][$i] != 0){
        echo "<li>" . $itemName[$i] . " x " . $_SESSION['itemQTY'][$i] . "..... $" . $peritemcost . "</li><br>";
        $total += $peritemcost;
        }else{
            echo "Your cart is empty. <br>";
            break;
        }
    }
    if($_SESSION['itemQTY'][$i] != 0){

    echo "Total: $" . $total . "<br>";
    echo "Tax (5.3%): $" . round($total*.053, 2) . "<br>";
    echo "Subtotal: $" . round($total*1.053, 2) . "<br>";
    echo '<form>
    <input type="button" value="Continue to payment">
</form>';
    }
}
?>



<?php include ("./Components/menu.php"); ?>
<?php include("./Components/Footer.php"); ?>


</body>
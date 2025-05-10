<?php
session_start();

header("location: http://www.krustywalrus.com/Week-5/CMS-Sessions/Cart.php");


if(isset($_SESSION['valid']) && $_SESSION['valid']){
$_SESSION['itemQTY'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
}




?>
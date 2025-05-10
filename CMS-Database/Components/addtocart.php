<?php
header("location: http://www.krustywalrus.com/Week-5/CMS-Sessions/Cart.php");
session_start();
if(!isset($_SESSION['cartActive'])){
$_SESSION['cartActive'] = true;
$_SESSION['cartSize'] = 0;
$_SESSION['itemQTY'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
}

if(isset($_SESSION['cartActive']) && $_SESSION['cartActive'] == true && isset($_SESSION['valid']) && $_SESSION['valid']){
    $_SESSION['cartSize']++;
    $_SESSION['itemQTY'][$_POST['item']]++;
}


?>
<?php
function redirectLogin() {
    header("Location: http://localhost/Week-8/CMS-Database/Landing.php");
}
?>
<?php
session_start();

if(isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE){
    session_unset();
    session_destroy();
    redirectLogin();
}
?>
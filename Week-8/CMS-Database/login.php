<?php include("./Components/sqlconnect.php") ?>

<?php
session_start();
$inputUsername = $_POST["username"];
$inputPassword = $_POST["password"];
$query = "SELECT Username, Password, AccessLevel FROM Users WHERE Username = '$inputUsername' AND Password = '$inputPassword'";
$login = $conn->query($query);
$row = $login->fetch_assoc();

if ($login->num_rows > 0) {
    if ($inputUsername == $row['Username'] && $inputPassword == $row['Password']) {
        $_SESSION["username"] = $row['Username'];
        $_SESSION["accesslevel"] = $row['AccessLevel'];
        $_SESSION["valid"] = true;
        $update = "UPDATE Users 
        SET LastLogin = Current_Timestamp()  
        WHERE Username = '$inputUsername' AND Password = '$inputPassword'";
        $conn->query($update);
        header("Location: http://localhost/Week-8/CMS-Database/Landing.php");
        exit();
    }
}else{
    header("Location: http://localhost/Week-8/CMS-Database/LoginPage.php?validLogin=incorrect");
}


?>
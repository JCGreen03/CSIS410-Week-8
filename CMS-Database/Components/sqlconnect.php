<?php 
    $servername = "localhost";
    $username = "NewlyRisen";
    $password = "FgSlTwTgHgHoStWbIhSnPbHeL316!";
    $database = "CMSFinal";

    $conn = new mysqli($servername, $username, $password, $database);

    if (mysqli_error($conn)) {
        echo "Connection failed" . $conn -> connect_error;
      }
  
    ?>
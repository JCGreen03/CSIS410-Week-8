<!--Form Validation-->
<?php
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["renewalperiod"]) || $_POST["renewalperiod"] == "not selected") {
        $errors[] = "Please select a Renewal Period.";
    }

    // Validate first and last name
    if (empty($_POST["FirstName"])) {
        $errors[] = "First name is required.";
    }
    if (empty($_POST["LastName"])) {
        $errors[] = "Last name is required.";
    }

    // Validate email
    if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Missing or Invalid email.";
    }

    // Validate phone number (basic numeric check)
    if (!preg_match("/^\d+$/", $_POST["PhoneNum"])) {
        $errors[] = "Phone number must contain only digits.";
    }

    // Validate card number is digits between 13 and 19 long
    if (empty($_POST["CardNum"])) {
        $errors[] = "Card Number is required.";
    } elseif (!ctype_digit($_POST["CardNum"])) {
        $errors[] = "Card number must contain only digits.";
    } elseif (strlen($_POST["CardNum"]) < 13 || strlen($_POST["CardNum"]) > 19) {
        $errors[] = "Card number must be between 13 and 19 digits long.";
    }

    if (!empty($errors)) {
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li style='color:red;   
            list-style: none;'>$error</li>";
        }
        echo "</ul>";
    } else{
        echo "Donation received! Thank you!";
    }
} ?>

<!--Donation Form-->
<?php
echo '<form method="post">
<br>Select a renewal period<br> <select name="renewalperiod" id="renew">
<option value="not selected">--- Choose a renewal period ---</option>
<option value="Yearly">Yearly</option>
<option value="Monthly">Monthly</option>
<option value="Weekly">Weekly</option>
</select><br>
First Name<br> <input type="text" name="FirstName"><br>
Last Name<br> <input type="text" name="LastName"><br>
Email<br> <input type="text" name="Email"><br>
Phone<br> <input type="text" name="PhoneNum"><br>
Card Number<br> <input type="text" name="CardNum"><br>
<input type="submit" value="Confirm Donation">
</form>'

?>
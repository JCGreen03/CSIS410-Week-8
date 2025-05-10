<!--Form Validation -->

<?php
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //Validate name
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

    // Validate phone number
    if (!preg_match("/^\d+$/", $_POST["PhoneNum"])) {
        $errors[] = "Phone number must contain only digits.";
    }

    // Validate card number is digits between 13 and 19 long
    if (empty($_POST["Zipcode"])) {
        $errors[] = "Zipcode is required.";
    } elseif (!ctype_digit($_POST["Zipcode"])) {
        $errors[] = "Card number must contain only digits.";
    } elseif (strlen($_POST["Zipcode"]) != 5) {
        $errors[] = "Zipcode must be 5 digits.";
    }

    if (!empty($errors)) {
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li style='color:red;   
            list-style: none;'>$error</li>";
        }
        echo "</ul>";
    } else{
        echo "Map Updated";
    }
} ?>
<!--Volunteer Form-->
<h1>Find Where You Can Volunteer</h1>
<?php
echo '<form method="post">

    First Name<br> <input type="text" name="FirstName"><br>
    Last Name<br> <input type="text" name="LastName"><br>
    Email<br> <input type="text" name="Email"><br>
    Phone<br> <input type="text" name="PhoneNum"><br>
    City<br> <input type="text" name="City"><br>
    State<br> <input type="text" name="State"><br>
    Zipcode<br> <input type="text" name="Zipcode"><br>
    <input type="submit" value="Find opportunities">

</form>'?>
<?php
$errors = [];
$inquiry = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate coordinator selection
    if (!isset($_POST["coordinator"]) || $_POST["coordinator"] == "not selected") {
        $errors[] = "Please select a coordinator.";
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

    // Validate inquiry
    if (empty($_POST["inquiry"])) {
        $errors[] = "Inquiry description is required.";
    }
}


// Display errors if any
if (!empty($errors)) {
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li style='color:red;   
        list-style: none;'>$error</li>";
    }
    echo "</ul>";
}
?>

<?php
echo '<form method="post">
    Who are you trying to contact<br> <select name="coordinator" id="coords">
	<option value="not selected">--- Choose a coordinator ---</option>
	<option value="Theo">Theodore</option>
	<option value="Lucas">Lucas</option>
</select><br>
    First Name<br> <input type="text" name="FirstName"><br>
    Last Name<br> <input type="text" name="LastName"><br>
    Email<br> <input type="text" name="Email"><br>
    Phone<br> <input type="text" name="PhoneNum"><br> 
    Brief description of your inquiry<br> <br><textarea name="inquiry" rows="5" cols="40">'?> <?php echo $inquiry?>
   
   
<?php echo '</textarea><br>
    <input type="submit" value="Send Meeting Request">
</form>';
?>
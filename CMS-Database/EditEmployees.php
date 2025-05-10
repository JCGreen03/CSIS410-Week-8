<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Employee CMS</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSDatabase.css">
</head>

<body>
<?php 
session_start();
include("./Components/sqlconnect.php");
include("./Components/Header.php");
?>

<?php
$query = "SELECT * FROM Employees";
$employees = $conn->query($query);

if(!isset($_SESSION['accesslevel']) || $_SESSION['accesslevel'] < 2){
    echo 'Access Denied. If you have proper credentials, log in.';
}

elseif($_SESSION['accesslevel'] > 1){
    echo '
    <table class="StoreCMSTable">
        <tr>
            <th>Name</th>
            <th>Rank</th>
            <th>Email</th>
            <th>Favorite Book</th>
        </tr>
    ';
    if($employees->num_rows > 0){
        while($rows = $employees->fetch_assoc()){
            echo '<tr>';
            echo "<td>" . $rows['LastName'] . " " . $rows['FirstName'] . "</td>";
            echo "<td>" . $rows['Role'] . "</td>";
            echo "<td>" . $rows['Email'] . "</td>";
            echo "<td>" . $rows['FavoriteBook'] . "</td>";
            echo '</tr>';
        }

        echo '</table>';
        }
        
    }
?>

<?php
$employees = $conn->query($query);
echo"
<div class='editEmployeeform'>
<form action='./Components/AlterEmployee.php' method='post'>
    <label for='EmpID' >Edit an Employee:</label>
    <select name='EmpID'>
    <option name='placeholder'>Select an employee</option>
    ";

if($employees->num_rows > 0){
    while($rows = $employees->fetch_assoc()){
       echo "<option name='EmpID' value='".$rows['EmployeeID']."'>";
       echo $rows['LastName'] . ", " . $rows['FirstName'];
       echo "</option>";
    }
}
echo "</select><br>";

echo 
   '
   Employee Details<br>
   Employee First Name: <input type="text" name="EmpFirstName"><br>
   Employee Last Name: <input type="text" name="EmpLastName"><br>
   Employee Rank: <input type="text" name="EmpRank"><br>
   Employee Email: <input type="text" name="EmpEmail"><br>
   Employee Favorite Book: <input type="text" name="EmpBook"><br>';

    echo "<input type='submit' name='action' value='Edit'><br>";
    echo "<input type='submit' name='action' value='Submit as new employee'><br>";

    if($_SESSION['accesslevel'] == 3){
    echo"<input type='submit' name='action' value='Delete'>";
    }
echo "</form>";
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = validateEmployeeForm($_POST);

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<p style='color:green;'>Form submitted successfully!</p>";
    }
}
echo '</div>';
?>

<?php
include("./Components/Footer.php")
?>

</body>
<?php

include("sqlconnect.php");
header("Location: http://localhost/Week-8/CMS-Database/EditEmployees.php");

$employeeID = $_POST['EmpID'];
$employeeFirstName = $_POST['EmpFirstName'];
$employeeLastName = $_POST['EmpLastName'];
$employeeRole = $_POST['EmpRank'];
$employeeEmail = $_POST['EmpEmail'];
$employeeBook = $_POST['EmpBook'];

if($_POST['action'] == 'Edit') {
    $query = "UPDATE Employees SET FirstName='$employeeFirstName', LastName='$employeeLastName', Role='$employeeRole', Email='$employeeEmail', FavoriteBook='$employeeBook' WHERE EmployeeID = $employeeID";
    $conn->query($query);
}elseif ($_POST['action'] == 'Delete') {
    $query = "DELETE FROM Employees WHERE EmployeeID='$employeeID'";
    $conn->query($query);
}
elseif ($_POST['action'] == 'Submit as new employee'){
    $query = "INSERT INTO Employees(FirstName, LastName, Role, Email, FavoriteBook) VALUES('$employeeFirstName', '$employeeLastName', '$employeeRole', '$employeeEmail', '$employeeBook')";
    $conn->query($query);
}
?>
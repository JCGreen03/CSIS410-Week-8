<?php
function validateEmployeeForm($postData) {
    $errors = [];

    if (empty($postData['EmpFirstName'])) {
        $errors[] = "First name is required.";
    }
    if (empty($postData['EmpLastName'])) {
        $errors[] = "Last name is required.";
    }
    if (empty($postData['EmpRank'])) {
        $errors[] = "Employee rank is required.";
    }
    if (empty($postData['EmpEmail']) || !filter_var($postData['EmpEmail'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }
    if (empty($postData['EmpID']) || $postData['EmpID'] == "Select an employee") {
        $errors[] = "Please select an employee.";
    }

    return $errors;
}
?>

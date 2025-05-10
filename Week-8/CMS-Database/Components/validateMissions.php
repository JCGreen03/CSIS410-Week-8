<?php
function validateForm($postData) {
    $errors = [];

    if (empty($postData['missionName'])) {
        $errors[] = "Mission name is required.";
    }
    if (empty($postData['missionDate'])) {
        $errors[] = "Mission date is required.";
    } elseif (!preg_match('/\d{4}-\d{2}-\d{2}/', $postData['missionDate'])) {
        $errors[] = "Invalid date format.";
    }
    if (empty($postData['MissionID']) || $postData['MissionID'] == "Select a Mission") {
        $errors[] = "Please select a mission.";
    }

    return $errors;
}
?>
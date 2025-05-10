<?php
$query = "SELECT * FROM Missions WHERE InCountry = 0";
$missions = $conn->query($query);

if($missions->num_rows > 0){
    while($row = $missions->fetch_assoc()){
        echo '<li>' . $row['MissionName'] . ' <br> ' . $row['MissionDate'] . ' <br> ------</li>';
    }
}

?>
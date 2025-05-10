<!-- Header W/ dropdown element for naviagtion-->

<?php
    echo '
 <div class="navbar">
  <a href=/HomeMenu.php> Return to Menu </a>
  <a href="Landing.php">Home</a>
  <a href="About.php">About</a>
  <a href="Employees.php">Our Team</a>
  <a href="Store.php">Store</a>
  <a href="Missions.php">Our Missions</a>
  <a href="profile.php">User Profile</a>

  <div class="dropdown">';
?>

<!--Dropdown element-->

<?php
  echo
    '<button class="dropbtn">Contact 
      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-content">
      <a href="Contact.php">Arrange a Meeting</a>
      <a href="GetInvolved.php">Volunteer</a>
      <a href="Donate">Set Up Recurring Donations</a>
      
    </div>
    </div>';
    ?>

    <?php
  if(!isset($_SESSION['valid'])) {
      echo '<a href="LoginPage.php">Log In</a>';
   }
    elseif((session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE)){
      echo '<a href="logout.php">Log Out</a>';
   }
echo '</div>';
     
?>
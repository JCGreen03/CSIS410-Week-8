<?php
if(isset($_GET['validLogin']) && $_GET['validLogin']=='incorrect'){
    echo "<ul><li style='color:red;   
          list-style: none;'>
          Username or password incorrect
          </li></ul>";
}

echo '<Form action="login.php" method="post">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Log In">
</Form>'
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Menu</title>
    <link rel="stylesheet" type="text/css" href="Home.css">
</head>

<body>

    <!--Title-->

    <?php
    echo "<div class='title'>";
    echo "<h1> Welcome to my website</h1>";
    echo "</div>";
    ?>

    <!--Buttons-->
    <?php
    echo "<a href='Week-1/Foundation/FoundationsHome.php' class='button'>Week 1 - Foundations</a>";
    echo "<a href='Week-1/Variables/variablesHome.php' class='button'>Week 1 - Variables</a>";
    echo "<a href='Week-2/Forms/GET.php' class='button'>Week 2 - Forms</a>";
    echo "<a href='Week-3/Arrays/ArrayHome.php' class='button'>Week 3 - Arrays</a>";
    echo "<a href='Week-4/Sessions/Login.php' class='button'>Week 4 - Sessions</a>";
    echo "<a href='Week-5/CMS-Sessions/Landing.php' class='button'>Week 5 - CMS Sessions</a>";
    echo "<a href='Week-6/Database/Login.php' class='button'>Week 6 - Database</a>";
    echo "<a href='Week-8/CMS-Database/Landing.php' class='button'>Week 8 - CMS Database</a>";
    ?>
    

    <!--W3 validation icons-->
    

    <?php
    include "./Week-1/Foundation/Components/Footer.php";
    ?>



    
</body>
</html>
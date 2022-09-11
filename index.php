<?php 
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once("inc/config.php"); 
?>

<!DOCTYPE html> ``                                                                                                                                                                                                                      
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logstyle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.6/dist/css/uikit.min.css" />
</head>
<body>
   <div class="uk-section ul-container">
    <?php
        echo "Hello World Today is: ";
        echo date("y m d");
    ?>
    <p>
        <a href="./login.php" class="href">Login</a>
        <a href="./register.php" class="href">Register</a>
    </p>
   </div>
</body>
</html>
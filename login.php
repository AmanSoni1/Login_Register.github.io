<?php 
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once("inc/config.php"); 
?>

<!DOCTYPE html>                                                                                                                                                                                               
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logstyle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.6/dist/css/uikit.min.css" />
</head>
<body>
    <uk-section class="uk-container" style="position:absolute; left: 50%; top: 50%; transform: translate(-50%,-50%);box-shadow: 8px 6px 5px black; padding: 0">
    <form style="border: 1px solid black; padding: 150px; padding-bottom: 90px" class="js-login">
<div style="position: absolute;top: 5%; left: 45% ; font-size: 30px; font-weight: 650">Login</div>
<div class="uk-margin">
    <div class="uk-inline">
        <div style="margin: 5px 0; font-weight: 700">Email:</div>
        <span class="uk-form-icon" style="margin-top: 40px" uk-icon="icon: user"></span>
        <input class="uk-input" style="border:0.5px solid black" type="email" placeholder="something@gmail.com" required = "required">
    </div>
</div>

<div class="uk-margin">
    <div class="uk-inline">
    <div style="margin-bottom: 5px; font-weight: 700">Password:</div>
        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock" style="margin-top: 30px"></span>
        <input class="uk-input" style="border:0.5px solid black" required = "required" type="password" placeholder="Your Password">
        </div>
        <div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none">
    test
</div> 
    <button style="display: block; padding: 8px; color: white; background-color: black; border-radius: 5px; border: 0; margin: 50px 0 10px 40%; font-size: 15px">Login</button>
    <div style="text-align: center">-------or-------</div>
        <button style=" padding: 8px; color: white; background-color: black; border-radius: 5px; border: 0;margin: 12px 0 10px 37%; font-size: 15px"><a href="register.php" style="color: white" >Sign Up</a></button>
</div>

</form>
</uk-section>
<?php require_once "inc/footer.php"; ?>


</body>
</html>
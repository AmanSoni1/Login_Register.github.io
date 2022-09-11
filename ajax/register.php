<?php
//allow the config
define('__CONFIG__', true);
//require the config
require_once("../inc/config.php"); 

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Always return JSON format
    header('Content-Type: application/json');

    $return = [];

    $email = Filter::String( $_POST['email'] );

    //make sure the user does not exist
    $findUser = $con -> prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");
    $findUser -> bindParam(':email', $email, PDO::PARAM_STR);
    $findUser -> execute();

    if($findUser -> rowCount() == 1){
        //User exist
        $return['error'] = "You already have an account";
        $return['is_logged_in'] = false;
    } else {
        //User does not exist, add them now

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $addUser = $con -> prepare("INSERT INTO users(name,email,password) VALUES(:name, LOWER(:email), :password)");
        $addUser -> bindParam(':name', $name, PDO::PARAM_STR);
        $addUser -> bindParam(':email', $email, PDO::PARAM_STR);
        $addUser -> bindParam(':password', $password, PDO::PARAM_STR);
        $addUser ->execute();

        $user_id = $con -> lastInsertId();

        $_SESSION['user_id'] = (int) $user_id;
        $return['redirect'] = 'dashboard.php?message=welcome';
    }
    // $return['redirect'] = 'login.php';

    echo json_encode($return, JSON_PRETTY_PRINT); exit;
}else{
    exit("Invalid URL");
}



?>
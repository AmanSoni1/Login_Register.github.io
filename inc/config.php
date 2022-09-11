<?php 
    if(!defined('__CONFIG__'))  {
        exit('YOU DO NOT HAVE A CONFIG FILE');
    }

    // SESSION are always turned on
    if(!isset($_SESSION)) {
        session_start();
    }
   //allow the footer
    define('ALLOW_FOOTER', true);
    //Include the DB.php file
     include_once "classes/DB.php";
     include_once "classes/filter.php";

    $con = DB::getConnection();
?>
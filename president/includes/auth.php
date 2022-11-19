<?php
include_once("app.php");
include_once("Controller/Controller.php");
$auth = new Controller;

if(isset($_GET['logout']))
{
    $checkLoggedOut = $auth->isLoggedOut();
    if($checkLoggedOut){
        //  header("location: ../index.php");
         redirect("User Successfully Logged Out", "login.php");
    }
}

?>
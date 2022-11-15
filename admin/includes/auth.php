<?php
include_once("app.php");
include_once("Controller/AdminController.php");
$auth = new AdminController;

if(isset($_GET['logout']))
{
    $checkLoggedOut = $auth->isLoggedOut();
    if($checkLoggedOut){
        redirect("User Successfully Logged Out", "login.php");
    }
}

?>
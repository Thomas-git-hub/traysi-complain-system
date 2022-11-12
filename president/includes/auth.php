<?php
include_once("config/app.php");
include_once("Controller/LoginController.php");
$auth = new LoginController;

if(isset($_GET['logout']))
{
    $checkLoggedOut = $auth->isLoggedOut();
    if($checkLoggedOut){
         header("location: ../index.php");
    }
}

if(isset($_POST['login']))
{
    $fullname = validateInput($db->conn,$_POST['fullname']);
    $code = validateInput($db->conn,$_POST['code']);

   
    $checkLogin = $auth->login($fullname, $code);
    if($checkLogin){
        redirect("", "president/index.php");
    }
    else
    {
        redirect("Invalid Credentials", "login.php");
        exit();
        
    }
}
?>
<?php
include_once("app.php");
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
    $contact_no = validateInput($db->conn,$_POST['contact_no']);

   
    $checkLogin = $auth->login($fullname, $contact_no);
    if($checkLogin){
        redirect("", "driver/index.php");
    }
    else
    {
        redirect("Invalid Credentials", "login.php");
        exit();
        
    }
}
?>
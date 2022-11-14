<?php
include_once("app.php");
include_once("admin/includes/Controller/LoginController.php");
$auth = new LoginController;

if(isset($_GET['logout']))
{
    $checkLoggedOut = $auth->isLoggedOut();
    if($checkLoggedOut){
         header("location: ../index.php");
    }
}

if(isset($_POST['adminlogin']))
{
    $adminname = validateInput($db->conn,$_POST['adminname']);
    $adminphone = validateInput($db->conn,$_POST['adminphone']);

   
    $checkLogin = $auth->login($adminname, $adminphone);
    if($checkLogin){
        redirect("", "admin/index.php");
    }
    else
    {
        redirect("Invalid Credentials", "login.php");
        exit();
        
    }
}
?>
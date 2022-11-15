<?php
include_once("app.php");
include_once("Controller/LoginController.php");
$auth = new LoginController;

if(isset($_GET['logout']))
{
    $checkLoggedOut = $auth->isLoggedOut();
    if($checkLoggedOut){
        //  header("location: ../index.php");
         redirect("User Successfully Logged Out", "login.php");
    }
}

if(isset($_POST['login_pres']))
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
if(isset($_POST['login_admin']))
{
    $fullname = validateInput($db->conn,$_POST['fullname']);
    $code = validateInput($db->conn,$_POST['code']);

   
    $checkAdminLogin = $auth->Adminlogin($fullname, $code);
    if($checkAdminLogin){
        redirect("", "admin/index.php");
    }
    else
    {
        redirect("Invalid Credentials", "login.php");
        exit();
        
    }
}
?>
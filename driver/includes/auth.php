<?php
include_once("app.php");
include_once("Controller/Driver_Controller.php");
$auth = new Driver_Controller;

if(isset($_GET['logout']))
{
    $checkLoggedOut = $auth->isLoggedOut();
    if($checkLoggedOut){
         header("location: ../index.php");
    }
}

?>
<?php
require("app.php");
require("Controller/ComplainController.php");

if(isset($_POST['reply']))
{
    $inputData = [
        'user_id' =>  validateInput($db->conn,$_POST['user_id']),
        'pres_id' =>  validateInput($db->conn,$_POST['pres_id']),
        'message' =>  validateInput($db->conn,$_POST['message']),
    ];

    $complain = new ComplainController;
    $result = $complain->reply($inputData);
    if($result){
       redirect("Replied Sucessfully", "president/inbox-complain.php");
    }else{
        redirect("Something went wrong", "president/inbox-complain.php");
    }
   
}
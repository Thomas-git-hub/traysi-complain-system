<?php
include_once("app.php");
include_once("Controller/DriverController.php");

if(isset($_POST['save']))
{
    $inputData = [
        'fullname' =>  validateInput($db->conn,$_POST['fullname']),
        'plate_no' =>  validateInput($db->conn,$_POST['plate_no']),
        'contact_no' =>  validateInput($db->conn,$_POST['contact_no']),
        'email' =>  validateInput($db->conn,$_POST['email']),
        'toda_id' =>  validateInput($db->conn,$_POST['toda_id']),
    ];

    $driver = new DriverController;
    $result = $driver->create($inputData);
    if($result){
       redirect("Driver Added Sucessfully", "president/driver.php");
    }else{
        redirect("Something went wrong", "president/driver.php");
    }
   
}

if(isset($_POST['active']))
{
    $id = validateInput($db->conn,$_POST['id']);
    $driver = new DriverController;
    $result = $driver->updateToActive($id);
    if($result){
        redirect("Status Updated Sucessfully", "president/driver.php");
     }else{
         redirect("Something went wrong", "president/driver.php");
     }

}

if(isset($_POST['inactive']))
{
    $id = validateInput($db->conn,$_POST['id']);
    $driver = new DriverController;
    $result = $driver->updateToDeactivate($id);
    if($result){
        redirect("Status Updated Sucessfully", "president/driver.php");
     }else{
         redirect("Something went wrong", "president/driver.php");
     }

}

if(isset($_POST['clear'])){
    
    $id = validateInput($db->conn,$_POST['id']);
    $driver = new DriverController;
    $result = $driver->clearComplain($id);
    if($result){
        
        redirect("Violation Cleared Sucessfully", "president/violation.php");
     }else{
         redirect("Something went wrong", "president/violation.php");
     }
}

?>
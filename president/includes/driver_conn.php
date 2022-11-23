<?php
include_once("app.php");
include_once("Controller/DriverController.php");
include_once("Controller/ComplainController.php");

if(isset($_POST['save']))
{

    $fullname = validateInput($db->conn,$_POST['fullname']);
    $plate_no = validateInput($db->conn,$_POST['plate_no']);
    $contact_no = validateInput($db->conn,$_POST['contact_no']);
    $email = validateInput($db->conn,$_POST['email']);

    $inputData = [
        'fullname' =>  validateInput($db->conn,$_POST['fullname']),
        'plate_no' =>  validateInput($db->conn,$_POST['plate_no']),
        'contact_no' =>  validateInput($db->conn,$_POST['contact_no']),
        'email' =>  validateInput($db->conn,$_POST['email']),
        'toda_id' =>  validateInput($db->conn,$_POST['toda_id']),
    ];

    $driver = new DriverController;
    $result = $driver->isDriverExists($plate_no, $contact_no);
    if($result){
        redirect("Driver Already Exist", "president/driver.php");
    }
    else{

        $driver_query = $driver->create($inputData); 
        if($driver_query){
            redirect("Driver Added Succesfully", "president/driver.php");
        }
        else {
            redirect("Something Went Wrong", "president/driver.php");
        }

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

if(isset($_POST['process']))
{
    $id = validateInput($db->conn,$_POST['id']);
    $complain = new ComplainController;
    $result = $complain->updateToProcess($id);
    if($result){
        redirect("Processing Message", "president/processing.php");
     }else{
         redirect("Something went wrong", "president/inbox-complain.php");
     }

}

if(isset($_POST['resolved']))
{
    $id = validateInput($db->conn,$_POST['id']);
    $complain = new ComplainController;
    $result = $complain->updateToResolved($id);
    if($result){
        redirect("Resolved Message", "president/resolved.php");
     }else{
         redirect("Something went wrong", "president/inbox-complain.php");
     }

}

?>
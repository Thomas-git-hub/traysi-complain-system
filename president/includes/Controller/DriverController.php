<?php

class DriverController{

    public function __construct()
    {
        $db = new db_conn;
        $this->conn = $db->conn;
        
    }

    public function create($inputData)
    {
        $data = "'". implode("' , '", $inputData). "'";
        // echo $data;
        $driverQuery = "INSERT INTO driver ( fullname
                                            ,plate_no
                                            ,contact_no
                                            ,email
                                            ,toda_id)
                                            VALUES($data)";
        $result = $this->conn->query($driverQuery);
        if($result){
            return true;
        }
        else{
         return false;   
        }
    }

    public function isDriverExists ($plate_no, $contact_no){
        $checkUser = "SELECT * FROM driver
                      WHERE plate_no = '$plate_no' OR contact_no = '$contact_no'
                      LIMIT 1";
         $result = $this->conn->query($checkUser);
         if($result->num_rows > 0 ){
            return true;
        }
        else{
         return false;   
        }
    }

    public function index(){
        $user_id = $_SESSION['auth_user']['toda_id'];
        $driverQuery = "SELECT 
        a.toda_id 
       ,b.*
       FROM president as a
       LEFT JOIN driver as b
       ON b.toda_id = a.toda_id
       WHERE b.toda_id = '$user_id'";
        $result = $this->conn->query($driverQuery);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }

    public function updateToActive($id)
    {
        $driver_id = validateInput($this->conn, $id);
        $driverQuery = "UPDATE driver 
                        SET status = 'Active' 
                        WHERE id = '$driver_id' 
                        LIMIT 1";
        $result = $this->conn->query($driverQuery);
        if($result){
            return true;
        }else{
            return false;
        }

    }
    public function updateToDeactivate($id)
    {
        $driver_id = validateInput($this->conn, $id);
        $driverQuery = "UPDATE driver 
                        SET status = 'Inactive' 
                        WHERE id = '$driver_id' 
                        LIMIT 1";
        $result = $this->conn->query($driverQuery);
        if($result){
            return true;
        }else{
            return false;
        }

    }

    public function clearComplain($id)
    {
        $complain_id = validateInput($this->conn, $id);
        $driverQuery = "DELETE FROM complain_tbl WHERE id  = '$complain_id' 
                        LIMIT 1";
        $result = $this->conn->query($driverQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function ActiveDriver(){
        $driverQuery = "SELECT COUNT(*) as activecount FROM driver WHERE status = 'Active'";
        $active = $this->conn->query($driverQuery);
        if($active->num_rows > 0){
            $data = $active->fetch_assoc();
            return $data;
        }else{
            return false;
        }
    }
    public function InactiveDriver(){
        $driverQuery = "SELECT COUNT(*) as inactivecount FROM driver WHERE status = 'Inactive'";
        $inactive = $this->conn->query($driverQuery);
        if($inactive->num_rows > 0){
            $data = $inactive->fetch_assoc();
            return $data;
        }else{
            return false;
        }
    }

}



?>
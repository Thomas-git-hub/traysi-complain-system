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

    public function check($d_name, $d_plate_no)
    {
        $d_name = validateInput($this->conn, $fullname);
        $d_plate_no = validateInput($this->conn, $plate_no);

        $driverQuery = "SELECT * FROM driver WHERE fullname = '$d_name' AND plate_no = '$d_plate_no'";
        $result = $this->conn->query($driverQuery);
        if($result){
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

}



?>
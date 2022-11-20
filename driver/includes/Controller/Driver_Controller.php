<?php

class Driver_Controller {
    
    public function __construct()
    {
        $db = new db_conn;
        $this->conn = $db->conn;
    } 

    private function userAuthentication($data)
    {
        $_SESSION['authenticated'] = true;
        $_SESSION['auth_role'] = $data['usertype'];
        $_SESSION['auth_user'] = [
            'id' =>$data['id'],
            'usertype' =>$data['usertype'],   
            'fullname' =>$data['fullname'],
            'plate_no' =>$data['plate_no'],
            'contact_no' =>$data['contact_no'],
            'email' =>$data['email'],
            'toda_id' =>$data['toda_id'],
            
        ];
    }
    

    public function isLoggedOut()
    {
        if(isset($_SESSION['authenticated']) === TRUE)
        {
        unset( $_SESSION['authenticated']);
        unset( $_SESSION['auth_user']);
        return true;
        }
        else{
            return false;
        }
    }

    // public function getComplainDetails()
    // {
    //     $checkAuth = $this->checkIsLoggedIn();
    //     if($checkAuth){
    //         $user_id = $_SESSION['auth_user']['id'];

    //         $sql= "SELECT e.fullname
    //                     ,e.email
    //                     ,e.contact_no
    //                     ,a.others
    //                     ,a.upload_image
    //                     ,date_format(a.created_at, '%m-%d-%Y') as `date`
    //                     ,date_format(a.created_at, '%h:%i %p') as `time`
    //                 FROM complain_tbl as a
    //                 LEFT JOIN toda_tbl as b 
    //                 ON b.id = a.toda_id
    //                 LEFT JOIN president as c
    //                 ON c.toda_id = b.id
    //                 LEFT JOIN driver as d 
    //                 ON a.driver_id = d.id
    //                 LEFT JOIN users as e 
    //                 ON a.user_id = e.id
    //                 LEFT JOIN offense_tbl as f
    //                 ON a.offense_id = f.id
    //                 WHERE c.id =  '$user_id'";

    //         $result = $this->conn->query($sql);
    //         if($result->num_rows  > 0){

    //             $data = $result->fetch_assoc();
    //             return $data;
    //         }
    //         else
    //         {
    //             redirect ("Record Not Found", "president/view-message.php");
    //         }
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }
}

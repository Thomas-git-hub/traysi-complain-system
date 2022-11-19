<?php

class LoginController
{
    public function __construct()
    {
        $db = new db_conn;
        $this->conn = $db->conn;
    } 

    public function login($fullname,$code)
    {
        $checkLogin = "SELECT * FROM president
                        WHERE 1=1
                         AND fullname = '$fullname '
                         AND code = '$code'
                         AND usertype = 2
                         AND status = 'Active'
                         LIMIT 1";
        $result = $this->conn->query($checkLogin);
        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            $this->userAuthentication($data);
            return true;
        }
        else
        {
            return false;
        }
    }

    public function Adminlogin($fullname,$code)
    {
        $checkAdminLogin = "SELECT * FROM `admin`
                        WHERE 1=1
                         AND fullname = '$fullname '
                         AND code = '$code'
                         AND usertype = 1
                         AND status = 'Active'
                         LIMIT 1";
        $result = $this->conn->query($checkAdminLogin);
        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            $this->userAuthentication($data);
            return true;
        }
        else
        {
            return false;
        }
    }
    public function Userlogin($fullname,$contact_no)
    {
        $checkUserLogin = "SELECT * FROM `users`
                            WHERE 1=1
                            AND fullname = '$fullname'
                            AND contact_no = '$contact_no'
                            AND usertype = 3
                            LIMIT 1";
        $result = $this->conn->query($checkUserLogin);
        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            $this->userAuthentication($data);
            return true;
        }
        else
        {
            return false;
        }
    }

    private function userAuthentication($data)
    {
        $_SESSION['authenticated'] = true;
        $_SESSION['auth_role'] = $data['usertype'];
        $_SESSION['auth_user'] = [
            'id' =>$data['id'],
            'fullname' =>$data['fullname'],
            'email' =>$data['email'],
            'contact_no' =>$data['contact_no'],
            'toda_id' =>$data['toda_id'],
            'usertype' =>$data['usertype'],   
        ];
    }
    
    public function isLoggedOut()
    {
        if(!isset($_SESSION['authenticated']))
        {
        unset( $_SESSION['authenticated']);
        unset( $_SESSION['auth_user']);
        return true;
        }
        else{
            return false;
        }
    }   

}
?>
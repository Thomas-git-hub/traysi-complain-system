<?php

class LoginController
{
    public function __construct()
    {
        $db = new db_conn;
        $this->conn = $db->conn;
    } 

    public function login($fullname,$contact_no)
    {
        $checkLogin = "SELECT * FROM driver
                        WHERE 
                             fullname = '$fullname '
                         AND contact_no = '$contact_no'
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

    private function userAuthentication($data)
    {
        $_SESSION['authenticated'] = true;
        // $_SESSION['auth_role'] = $data['']
        $_SESSION['auth_user'] = [
            'id' =>$data['id'],
            'fullname' =>$data['fullname'],
            'email' =>$data['email'],
            'contact_no' =>$data['contact_no'],
            'toda_id' =>$data['toda_id'],
        ];
    
    }

    public function isLoggedIn()
    {
        if(isset($_SESSION['authenticated']) === TRUE){
            redirect('You are already logged in', 'driver/index.php');
        }
        else{
            return false;
        }
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
}
?>
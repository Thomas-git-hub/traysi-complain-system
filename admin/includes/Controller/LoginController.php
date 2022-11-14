<?php

class LoginController
{
    public function __construct()
    {
        $db = new db_conn;
        $this->conn = $db->conn;
    } 

    public function login($adminname,$adminphone)
    {
        $checkLogin = "SELECT * FROM admin
                        WHERE 
                             username = '$adminname '
                         AND adminCode = '$adminphone'
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
            'username' =>$data['username'],
            'adminCode' =>$data['admincode'],
        ];
    
    }

    public function isLoggedIn()
    {
        if(isset($_SESSION['authenticated']) === TRUE){
            redirect('You are already logged in', 'admin/index.php');
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
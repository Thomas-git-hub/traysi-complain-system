<?php

class AdminController
{
    public function __construct()
    {
        $db = new db_conn;
        $this->conn = $db->conn;
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
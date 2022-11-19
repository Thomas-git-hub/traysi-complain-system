<?php

class UserController
{
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
            'fullname' =>$data['fullname'],
            'email' =>$data['email'],
            'contact_no' =>$data['contact_no'],
            'usertype' =>$data['usertype'],   
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
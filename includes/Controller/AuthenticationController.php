<?php
include_once("includes/app.php");
class AuthenticationController
{
    public function __construct()
    {
        $db = new db_conn;
        $this->conn = $db->conn;

        $this->checkIsLoggedIn();
    }

    public function checkIsLoggedIn()
    {
        if(!isset($_SESSION['authenticated']))
        {
          redirect("Login to Access the page", "login.php");
          return false;
        }
        else
        {
            return true;
        }
    }

    public function authAdminDetails()
    {
        $checkAuth = $this->checkIsLoggedIn();
        if($checkAuth){
            $user_admin = $_SESSION['auth_user']['fullname'];

            $getAdmin= "SELECT * FROM `admin` WHERE fullname = '$user_admin'";

            $result = $this->conn->query($getAdmin);
            if($result->num_rows  > 0){

                $data = $result->fetch_assoc();
                return $data;
            }
            else
            {
                redirect ("Record Not Found", "index.php");
            }
        }
        else
        {
            return false;
        }
    }

    public function authDetails()
    {
        $checkAuth = $this->checkIsLoggedIn();
        if($checkAuth){
            $user_id = $_SESSION['auth_user']['id'];

            $getPres= "SELECT * FROM `president` WHERE toda_id = '$user_id'";

            $result = $this->conn->query($getPres);
            if($result->num_rows  > 0){

                $data = $result->fetch_assoc();
                return $data;
            }
            else
            {
                redirect ("Record Not Found", "index.php");
            }
        }
        else
        {
            return false;
        }
    }

    public function authUserDetails()
    {
        $checkAuth = $this->checkIsLoggedIn();
        if($checkAuth){
            $user_id = $_SESSION['auth_user']['id'];

            $getUser= "SELECT * FROM `users` WHERE id = '$user_id'";

            $result = $this->conn->query($getUser);
            if($result->num_rows  > 0){

                $data = $result->fetch_assoc();
                return $data;
            }
            else
            {
                redirect ("Record Not Found", "index.php");
            }
        }
        else
        {
            return false;
        }
    }
    
    public function admin()
    {
        if($_SESSION['auth_role'] !== '1') {
            session_start();
            session_unset();
            session_destroy();
            redirect("Login to Access the page", "login.php");
            exit();
            }
    }
    
    public function president()
    {
        if($_SESSION['auth_role'] !== '2') {
            session_start();
            session_unset();
            session_destroy();
            redirect("Login to Access the page", "login.php");
            exit();
            }
    }

    public function user()
    {
        if($_SESSION['auth_role'] !== '3') {
            session_start();
            session_unset();
            session_destroy();
            redirect("Login to Access the page", "login.php");
            exit();
            }
    }
}

?>
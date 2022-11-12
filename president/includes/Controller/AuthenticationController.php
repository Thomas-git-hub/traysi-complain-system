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

    public function authDetails()
    {
        $checkAuth = $this->checkIsLoggedIn();
        if($checkAuth){
            $user_id = $_SESSION['auth_user']['id'];

            $getDriverperPres= "SELECT * FROM president WHERE toda_id = '$user_id'";

            $result = $this->conn->query($getDriverperPres);
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

    public function getComplainDetails()
    {
        $checkAuth = $this->checkIsLoggedIn();
        if($checkAuth){
            $user_id = $_SESSION['auth_user']['id'];

            $sql= "SELECT e.fullname
                        ,e.email
                        ,e.contact_no
                        ,a.others
                        ,a.upload_image
                        ,date_format(a.created_at, '%m-%d-%Y') as `date`
                        ,date_format(a.created_at, '%h:%i %p') as `time`
                    FROM complain_tbl as a
                    LEFT JOIN toda_tbl as b 
                    ON b.id = a.toda_id
                    LEFT JOIN president as c
                    ON c.toda_id = b.id
                    LEFT JOIN driver as d 
                    ON a.driver_id = d.id
                    LEFT JOIN users as e 
                    ON a.user_id = e.id
                    LEFT JOIN offense_tbl as f
                    ON a.offense_id = f.id
                    WHERE c.id =  '$user_id'";

            $result = $this->conn->query($sql);
            if($result->num_rows  > 0){

                $data = $result->fetch_assoc();
                return $data;
            }
            else
            {
                redirect ("Record Not Found", "president/view-message.php");
            }
        }
        else
        {
            return false;
        }
    }
    public function getResolvedDetails()
    {
        $checkAuth = $this->checkIsLoggedIn();
        if($checkAuth){
            $user_id = $_SESSION['auth_user']['id'];

            $sql= "SELECT e.fullname
                        ,e.email
                        ,e.contact_no
                        ,a.others
                        ,a.upload_image
                        ,date_format(a.created_at, '%m-%d-%Y') as `date`
                        ,date_format(a.created_at, '%h:%i %p') as `time`
                        ,a.`status`
                    FROM complain_tbl as a
                    LEFT JOIN toda_tbl as b 
                    ON b.id = a.toda_id
                    LEFT JOIN president as c
                    ON c.toda_id = b.id
                    LEFT JOIN driver as d 
                    ON a.driver_id = d.id
                    LEFT JOIN users as e 
                    ON a.user_id = e.id
                    LEFT JOIN offense_tbl as f
                    ON a.offense_id = f.id
                    WHERE 1=1
                    AND c.id = '$user_id'
                    AND a.`status` = 'RS' ";

            $result = $this->conn->query($sql);
            if($result->num_rows  > 0){

                $data = $result->fetch_assoc();
                return $data;
            }
            else
            {
                redirect ("Record Not Found", "president/resolved.php");
            }
        }
        else
        {
            return false;
        }
    }

}

$authenticated = new AuthenticationController;

?>
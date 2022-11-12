<?php

class ComplainController{

    public function __construct()
    {
        $db = new db_conn;
        $this->conn = $db->conn;
    }

    public function getViolation(){
        $user_id = $_SESSION['auth_user']['pres_id'];
        $ViolaionQuery = "SELECT e.type
                               , d.fullname
                               , d.plate_no
                               , a.`status`
                        FROM complain_tbl as a
                        LEFT JOIN toda_tbl as b 
                         ON b.id = a.toda_id
                        LEFT JOIN president as c
                         ON c.toda_id = b.id
                        LEFT JOIN driver as d 
                         ON a.driver_id = d.id
                        LEFT JOIN offense_tbl as e
                         ON a.offense_id = e.id
                        WHERE c.id =  '$user_id'";
        $result = $this->conn->query($ViolaionQuery);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }
    public function getUserComplain(){
        $user_id = $_SESSION['auth_user']['pres_id'];
        $ComplainQuery = "SELECT e.fullname
                                ,a.others
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
                        WHERE c.id = '$user_id'";
        $result = $this->conn->query($ComplainQuery);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }
    public function getProcessingComplain(){
        $user_id = $_SESSION['auth_user']['pres_id'];
        $ComplainQuery = "SELECT e.fullname
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
                            AND c.id = ' $user_id'
                            AND a.`status` = 'P' ";
        $result = $this->conn->query($ComplainQuery);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }

    public function getResolveComplain(){
        $user_id = $_SESSION['auth_user']['pres_id'];
        $ComplainQuery = "SELECT e.fullname
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
                            AND c.id = ' $user_id'
                            AND a.`status` = 'RS' ";
        $result = $this->conn->query($ComplainQuery);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }

    
}

$details = new ComplainController;

?>
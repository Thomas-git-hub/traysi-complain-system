<?php

class ComplainController{

    public function __construct()
    {
        $db = new db_conn;
        $this->conn = $db->conn;
    }

    public function reply($inputData)
    {
        $data = "'". implode("' , '", $inputData). "'";
        echo $data;
        

        $Query = "INSERT INTO reply_tbl (`user_id`
        ,`pres_id`
         ,`message`)
                    VALUES($data)";
        $result = $this->conn->query($Query);
        if($result){
            return true;
        }
        else{
         return false;   
        }
    }


    public function getViolation(){
        $user_id = $_SESSION['auth_user']['id'];
        $ViolaionQuery = "SELECT a.id
                               ,e.type
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
        $user_id = $_SESSION['auth_user']['id'];
        $ComplainQuery = "SELECT a.id
                                ,e.fullname
                                ,a.others
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
                        AND a.`status` = 'R'";
        $result = $this->conn->query($ComplainQuery);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }
    public function getProcessingComplain(){
        $user_id = $_SESSION['auth_user']['id'];
        $ComplainQuery = "SELECT a.id
                                ,e.fullname
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
        $user_id = $_SESSION['auth_user']['id'];
        $ComplainQuery = "SELECT 
                                 a.id
                                ,e.fullname
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
    
    public function viewResolved($id)
    {
        $complain_id = validateInput($this->conn, $id);
        $user_id = $_SESSION['auth_user']['id'];
        $sql= "SELECT 
                        a.id
                    ,e.fullname
                    ,e.email
                    ,e.contact_no
                    ,a.others
                    ,a.upload_image
                    ,date_format(a.created_at, '%m-%d-%Y') as `date`
                    ,date_format(a.created_at, '%h:%i %p') as `time`
                    ,a.user_id
                    ,a.status
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
                AND a.id = '$complain_id' 
                AND a.status = 'RS'
                LIMIT 1";

        $result = $this->conn->query($sql);
        if($result->num_rows == 1){

            $data = $result->fetch_assoc();
            return $data;
        }
        else
        {
            return false;
        }
    } 
    public function view($id)
    {
        $complain_id = validateInput($this->conn, $id);
        $user_id = $_SESSION['auth_user']['id'];
        $sql= "SELECT 
                        a.id
                    ,e.fullname
                    ,e.email
                    ,e.contact_no
                    ,a.others
                    ,a.upload_image
                    ,date_format(a.created_at, '%m-%d-%Y') as `date`
                    ,date_format(a.created_at, '%h:%i %p') as `time`
                    ,a.user_id
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
                AND a.id = '$complain_id' 
                LIMIT 1";

        $result = $this->conn->query($sql);
        if($result->num_rows == 1){

            $data = $result->fetch_assoc();
            return $data;
        }
        else
        {
            return false;
        }
    }      

    public function updateToProcess($id)
        {
            $complain_id = validateInput($this->conn, $id);
            $driverQuery = "UPDATE complain_tbl 
                            SET status = 'P' 
                            WHERE id = '$complain_id'
                            AND status = 'R'
                            LIMIT 1";
            $result = $this->conn->query($driverQuery);
            if($result){
                return true;
            }else{
                return false;
            }

        }

        public function updateToResolved($id)
        {
            $complain_id = validateInput($this->conn, $id);
            $driverQuery = "UPDATE complain_tbl 
                            SET status = 'RS' 
                            WHERE id = '$complain_id'
                            AND status = 'P'
                            LIMIT 1";
            $result = $this->conn->query($driverQuery);
            if($result){
                return true;
            }else{
                return false;
            }
        }

        public function report_count(){
            $user_id = $_SESSION['auth_user']['toda_id'];
            $driverQuery = "SELECT COUNT(*) as reports FROM complain_tbl WHERE toda_id = '$user_id'";
            $report = $this->conn->query($driverQuery);
            if($report->num_rows > 0){
                $data = $report->fetch_assoc();
                return $data;
            }else{
                return false;
            }
        }
}

?>
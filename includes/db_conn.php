<?php

class db_conn
{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password ='';
    protected $database = 'db_test';

    public $conn = null;

    public function __construct()
    {
        //initializze connection property
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->conn->connect_error){
            echo "failed".$this->conn->connect_error;
        }
        echo "";
    }   
}

?>
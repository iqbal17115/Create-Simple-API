<?php

class Database{
    public $host = "localhost"; //host name  
    public $username = "root"; //user name  
    public $password = ""; // password  
    public $db = "api"; // database name  
    public $conn;

    public function __construct(){
       $this->conn=new mysqli($this->host, $this->username, $this->password, $this->db);
    }
}


<?php
include_once 'database.php';

class Person{
    public $connection;
    public $table="persons";

    public function __construct(){
      $obj=new Database();
      $this->connection=$obj->conn;
    }

    public function getData(){
       $query="SELECT * FROM ".$this->table;
       $results=mysqli_query($this->connection, $query);  
       return $results;  
    }
}
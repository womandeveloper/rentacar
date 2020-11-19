<?php

class Connection{
    protected $conn;
    protected $host     = "localhost";
    protected $dbname   = "cars";
    protected $username = "root";
    protected $password = "";

    function __construct(){
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=UTF8;", $this->username, $this->password);
        }
        catch(PDOException $e){
            die("Veritabanına Bağlantı Hatası".$e->getMessage());
        }
    }
}
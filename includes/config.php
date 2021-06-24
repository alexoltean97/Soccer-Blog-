<?php

class DBconnection
{
    const DBNAME = "soccer_blog";
    const DBHOST = "localhost";
    const DBPASSWORD = "";
    const DBUSER = "root";
    public $connection;

    public function __construct(){
        $this->connection = mysqli_connect(self::DBHOST,self::DBUSER,self::DBPASSWORD,self::DBNAME);
    }
}

$con = new DBconnection();



<?php

class DBconnection{

    private $DBNAME = "soccer_blog";
    private $DBHOST = "localhost";
    private $DBPASSWORD = "";
    private $DBUSER = "root";

    public function database_con(){
        $connection = mysqli_connect($this->DBHOST,$this->DBUSER,$this->DBPASSWORD,$this->DBNAME);
        return $connection;
    }
}


$conn = new DBconnection();
$conn->database_con();
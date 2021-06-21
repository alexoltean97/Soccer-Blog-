<?php

class DBconnection{

    const DBNAME = "soccer_blog";
    const DBHOST = "localhost";
    const DBPASSWORD = "";
    const DBUSER = "root";
    protected static $connection;

    private static function database_con(){
        self::$connection = mysqli_connect(self::DBHOST,self::DBUSER,self::DBPASSWORD,self::DBNAME);
        if( self::$connection) {
            return  self::$connection;
        } else{
            echo "DB Connection failed " . mysqli_error();
        }
    }

    public static function database_con_return(){
        return self::database_con();
    }
}

DBconnection::database_con_return();


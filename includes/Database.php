<?php


class Database extends DBconnection
{

    public static function returnAdminsQuery($conn)
    {
        return mysqli_query($conn, 'SELECT * FROM admin');
    }


    public function insertUserQuery($conn, $query)
    {
        return mysqli_query($conn, $query);
    }

}
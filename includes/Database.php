<?php


class Database extends DBconnection {
    public function adminUserQuery($conn,$query){
       return mysqli_query($conn,$query);
    }
}



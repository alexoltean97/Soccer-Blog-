<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 6/23/2021
 * Time: 12:09 PM
 */

class Admins extends Database
{

    public $adminUser = "";
    public $adminPass = "";

    public function connectAdmin(){

        if(isset($_POST['submit'])){

            $username = trim($_POST['user']);
            $password = trim($_POST['password']);
            $adminQuerySet = $this::returnAdminsQuery($this->connection);

            while($row = $adminQuerySet->fetch_assoc()){

                $this->adminUser = trim($row['username']);
                $this->adminPass = trim($row['password']);

                if($username === $this->adminUser && $password === $this->adminPass){
                    header("Location:admin/index.php");
                } else{
                    echo "Invalid Credentials";
                }
            }
        }

    }

}
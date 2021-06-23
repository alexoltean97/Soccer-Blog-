<?php

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

    public function adminSession(){
        if(isset($_POST['submit'])) {
            $_SESSION['username'] = trim($_POST['user']);
            $_SESSION['password'] = trim($_POST['password']);
        }
    }
}
<?php


class admin_login{

    protected $username;
 //   protected $email;
    protected $password;


    public function getPostData(){

        if(isset($_POST['submit'])){
         $this->username =  $_POST['user'];
         $this->password = $_POST['password'];
        }
    }

}


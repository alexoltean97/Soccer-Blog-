<?php


class admin_login{

    protected $username;
    protected $password;

    public function __construct()
    {
        $this->getPostData();
        $this->checkIfEmpty();
        $this->checkIfValid();
    }

    public function getPostData(){

        if(isset($_POST['submit'])){
          $this->username = $_POST['user'];
          $this->password = $_POST['password'];
        }
    }

    public function checkIfEmpty(){


     if(isset($_POST['submit'])) {
         if (empty($this->username) == true) {
             $error_msg = "<h2 class='error-msg'>The username can not be empty</h2>";
             echo $error_msg;
         }

         if (empty($this->password) == true) {
             $error_msg = "<h2 class='error-msg'>Password can not be empty</h2>";
             echo $error_msg;
         }
     }
    }

    public function checkIfValid(){
        if(isset($_POST['submit'])) {
            if(!preg_match("/^[a-zA-z]*$/", $this->username)){
                echo $error_msg = "<h2 class='error-msg'>Only alphabets and whitespace are allowed</h2>";
            }

        }
    }


}


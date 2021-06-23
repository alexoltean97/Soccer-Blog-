<?php


class admin_login extends DBconnection
{

//    protected $username;
//    protected $password;
//    protected static $sql;
//
//    public function __construct()
//    {
//        $this->getPostData();
//        $this->checkIfEmpty();
//        $this->checkIfValid();
//
//    }
//
//    public function getPostData()
//    {
//
//        if (isset($_POST['submit'])) {
//            $this->username = $_POST['user'];
//            $this->password = $_POST['password'];
//        }
//    }
//
//    public function checkIfEmpty()
//    {
//
//
//        if (isset($_POST['submit'])) {
//            if (empty($this->username) == true) {
//                $error_msg = "<h2 class='error-msg'>The username can not be empty</h2>";
//                echo $error_msg;
//            }
//
//            if (empty($this->password) == true) {
//                $error_msg = "<h2 class='error-msg'>Password can not be empty</h2>";
//                echo $error_msg;
//            }
//        }
//    }
//
//    public function checkIfValid()
//    {
//        if (isset($_POST['submit'])) {
//            if (!preg_match("/^[a-zA-z]*$/", $this->username)) {
//                echo $error_msg = "<h2 class='error-msg'>Only alphabets and whitespace are allowed</h2>";
//            }
//
//        }
//    }
//
//
//    private function get_admin()
//    {
//        $sql = "SELECT * FROM admin";
//        $query = parent::database_con_return()->query($sql);
//        while($row = $query->fetch_assoc()){
//             echo $username = $row['username'];
//             echo $pass = $row['password'];
//        }
//    }
//
////    private function admin_access(){
////        $this->get_admin();
////
////    }
//
//    private function getUserSession(){
//
//        if(isset($_POST['submit'])){
//            $current_user = $_SESSION["username"] == $_POST['user'];
//            $current_password = $_SESSION["password"] == $_POST['password'];
//        }
//    }
//


}

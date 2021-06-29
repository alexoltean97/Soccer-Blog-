<?php



class Users extends Database
{
    public $firstName;
    public $lastName;
    public $username;
    public $email;
    public $password;


    public function registerUsers($conn){
        if(isset($_POST['submit'])){

            $firstName = $this->firstName = $_POST['firstName'];
            $lastName = $this->lastName = $_POST['lastName'];
            $username = $this->username = $_POST['username'];
            $email =  $this->email = $_POST['email'];
            $password =  $this->password = $_POST['password'];

            $query = "INSERT INTO users (first_name,last_name,username,email,password) 
              VALUES ('$firstName', '$lastName','$username', '$email', '$password') ";

            if(mysqli_query($conn,$query)){
                $SESSION['basic_username'] = $username;
                header("Location:index.php");
            }
        }
    }

    public function loginUsers($conn){

        if(isset($_POST['submit'])){
            $username = $this->username = $_POST['username'];
            $password =  $this->password = $_POST['password'];

        $query = "SELECT username, password FROM users";
        $result =  mysqli_query($conn, $query);

        while($row = $result->fetch_assoc()){
                 $dbUser = $row['username'];
                 $dbPass = $row['password'];

            if($username == $dbUser && $password == $dbPass){
                echo "<script>alert('you may enter');</script>";
                $_SESSION['normal_user'] = $username;
                header('Location:index.php');
            } else if(empty($username) && empty($password)){
                echo "Complete the fields";
            }  else if((!$username == $dbUser && !$password == $dbPass)){
                echo "Username  and Password wrong";
            }
            else if($username == $dbUser && !$password == $dbPass){
                echo "Password is wrong";
            }
            else if(!$username == $dbUser && $password == $dbPass){
                echo "USerame is wrong";
            }
        }
    }
    }
}


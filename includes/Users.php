<?php



class Users extends DBconnection
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
             echo "New Record created";
            } else{
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }

        }
    }

}


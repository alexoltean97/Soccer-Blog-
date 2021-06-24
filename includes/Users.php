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

            echo $this->firstName = $_POST['firstName'];
            echo $this->lastName = $_POST['lastName'];
            echo $this->username = $_POST['username'];
            echo  $this->email = $_POST['email'];
            echo  $this->password = $_POST['password'];

            $query = "INSERT INTO users ('first_name','last_name','email','password')";
            $query .= "VALUES ('$this->firstName', '$this->lastName','$this->username', '$this->email', '$this->password')";


            if(mysqli_query($conn,$query)){
             echo "New Record created";
            } else{
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }

        }
    }

}


<?php require_once('templates/header.php');?>

<?php
$adminQuery = new Database();
$adminUser = "";
$adminPass = "";

if(isset($_POST['submit'])){

    $username = trim($_POST['user']);
    $password = trim($_POST['password']);
    $adminQuerySet = $adminQuery->adminUserQuery($con->connection,'SELECT * FROM admin');

    while($row = $adminQuerySet->fetch_assoc()){

         $adminUser = trim($row['username']);
         $adminPass = trim($row['password']);

        if($username === $adminUser && $password === $adminPass){
            header("Location:admin/index.php");
        } else{
            echo "Invalid Credentials";
        }
    }
}
?>

<div class="loginpanel">


    <form method="post" action="login_admin.php">

    <div class="txt">
        <input id="user" name="user" type="text" placeholder="Username or email"/ required>
        <label for="user" class="entypo-user"></label>
    </div>

    <div class="txt">
        <input id="pwd" name="password" type="password" placeholder="Password"/ required>
        <label for="pwd" class="entypo-lock"></label>
    </div>


    <div class="buttons">
        <input type="submit" name="submit" value="Login" />
    </div>

    </form>

</div>

<span class="resp-info"></span>
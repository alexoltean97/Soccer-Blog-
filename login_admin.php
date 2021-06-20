<?php require_once('templates/header.php');?>

<?php


?>


<div class="loginpanel">


    <form method="post" action="login_admin.php">

    <div class="txt">
        <input id="user" name="user" type="text" placeholder="Username or email" />
        <label for="user" class="entypo-user"></label>
    </div>

    <div class="txt">
        <input id="pwd" name="password" type="password" placeholder="Password" />
        <label for="pwd" class="entypo-lock"></label>
    </div>


    <div class="buttons">
        <input type="submit" name="submit" value="Login" />
    </div>

    </form>

</div>

<span class="resp-info"></span>
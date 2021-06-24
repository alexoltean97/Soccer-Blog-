
<?php require_once('templates/header.php');?>


<?php

$connection = $con->connection;
$registerUsers = new Users();
$registerUsers->registerUsers($connection);




?>
<section class="register_user">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form id="registrationForm" method="post" action="register_users.php">
                    <input type="text" class="firstName" name="firstName" placeholder="First Name"/>
                    <input type="text" class="lastName" name="lastName" placeholder="Last Name"/>
                    <input type="text" class="username" name="username" placeholder="Username"/>
                    <input type="email" class="email" name="email" placeholder="Email"/>
                    <input type="password" class="password" name="password" placeholder="Password"/>
                    <input type="submit" class="submit" name="submit" value="Register">
                </form>
            </div>
        </div> <!-- End .row -->
    </div> <!-- End .container -->
</section> <!-- Register_user -->



<?php require_once('templates/footer.php');?>

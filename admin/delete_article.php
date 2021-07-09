
<?php require_once('header.php');?>
<?php require_once('sidebar.php');?>

<section id="main-content">
    <section class="wrapper">

        <?php

        $model = new articles();
        $id = $_GET['id'];

        $model->delete_single_article($id);

        ?>

    </section>
</section>

<?php require_once('footer.php');?>
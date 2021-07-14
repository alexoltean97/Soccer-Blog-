
<?php require_once('header.php');?>
<?php require_once('sidebar.php');?>
<?php

$model = new articles();
$id = $_GET['id'];
$rows = $model->edit($id);


    if(isset($_POST['edit_article'])){

         $data['id'] = $id;
         $data['author'] = $_POST['author'];
         $data['title'] = $_POST['title'];
         $data['date'] = $_POST['date'];
         $data['content'] = $_POST['content'];
         $update = $model->update_article($data);

        if($update){
            echo "<script>alert('record update successful');</script>";
            echo "<script>window.location.href = 'articles.php';</script>";

        } else{
            echo "<script>alert('record update failed');</script>";
            echo "<script>window.location.href = 'articles.php';</script>";
        }
    }
?>
        <section id="main-content">
            <section class="wrapper">
                <h2>Write a new article</h2>

                <?php
                foreach ($rows as $row){ ?>

                <form class="new_article" action="" method="post">
                    <input placeholder="author" type="text" value="<?php echo $row['author'];?>" name="author" class="author-name">
                    <input placeholder="title" type="text" name="title" value="<?php echo $row['title'];?>" class="author-name">
                    <input type="date" name="date" value="<?php echo $row['date'];?>" class="date">
                    <textarea  placeholder="<?php echo $row['content'];?>" name="content" class="content"></textarea>
                    <input type="file" name="image">
                    <input type="submit" name="edit_article">
                </form>
                <?php } ?>
            </section>
        </section>
<?php require_once('footer.php');?>
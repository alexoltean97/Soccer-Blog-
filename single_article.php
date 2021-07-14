<?php require_once('templates/header.php');?>


<?php

$model = new articles();
$id = $_GET['id'];
$results = $model->fetch_single($id);

?>

<section class="single_article">

    <?php
    foreach ($results as $result){

    ?>

    <img width="100%" height="500px" src="
        <?php
        if(!empty($result['image'])){
            echo "images/" . $result['image'];
        } else{
            echo "https://placekitten.com/640/";
        }
         ?>
        " alt="single_article_image">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>

            <div class="container">
            <div class="col-lg-12">
            <div class="article_description">
                <img class="writer_avatar" alt="Writter_avatar"/>
                <h2><?php echo $result['title'];?></h2>
                <h5 class="article_info"><?php echo $result['author'];?> <span><?php echo $result['date'];?></span></h5>
            </div> <!-- End .article-content -->


            <div class="article_content">
                <h2><?php echo $result['date'];?></h2>
                <p><?php echo $result['content'];?></p>
            </div>
               <?php   }
            ?>
            </div>
            </div>
        </div> <!-- End .row -->
</section> <!-- End .single_article -->

<?php require_once('templates/footer.php');?>
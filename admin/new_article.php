
<?php require_once('header.php');?>
<?php require_once('sidebar.php');?>

<?php

$articlesCreate = new articles();
$articlesCreate->insert();

?>

<section id="main-content">
    <section class="wrapper">
        <h2>Write a new article</h2>
        <form class="new_article" action="new_article.php" method="post">
            <input placeholder="author" type="text" name="author" class="author-name">
            <input placeholder="title" type="text" name="title" class="author-name">
            <input type="date" name="date" class="date">
            <textarea  placeholder="content" name="content" class="content"></textarea>
            <input type="submit" name="submit_article">
        </form>
    </section>
</section>

<?php require_once('footer.php');?>
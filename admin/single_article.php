
<?php require_once('header.php');?>
<?php require_once('sidebar.php');?>


<section id="main-content">
    <section class="wrapper">
        <table class="table">
            <thead>
            <tr>
                <th>Author</th>
                <th>Date</th>
                <th>Title</th>
                <th>Preview</th>

            </tr>
            </thead>
            <tbody>
            <?php
            $model = new articles();
            $id = $_GET['id'];
            $rows = $model->fetch_single($id);

            foreach ($rows as $row){ ?>
                    <tr>
                        <td><?php echo $row['author'];?></td>
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $row['title'];?></td>
                        <td><?php echo $row['content'];?></td>
                    </tr>
             <?php  }
            ?>
            </tbody>
        </table>
    </section>
</section>

<?php require_once('footer.php');?>
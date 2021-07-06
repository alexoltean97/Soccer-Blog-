<?php require_once('header.php');?>
<?php require_once('sidebar.php');?>

    <section id="main-content">
        <section class="wrapper">


            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Preview</th>

                </tr>
                </thead>

                <tbody>
                <?php
                $model = new articles();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                    foreach($rows as $row){

                        $content = $row['content'];
                        ?>
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $row['author'];?></td>
                            <td><?php echo $row['date'];?></td>
                            <td><?php echo $row['title'];?></td>
                            <td><?php echo $row['content'];?></td>

                            <td>
                                <a href="read.php?id=<?php echo $row['id'];?>" class="badge badge-info">Read</a>
                                <a href="delete.php?id=<?php echo $row['id'];?>" class="badge badge-danger">Delete</a>
                                <a href="edit.php?id=<?php echo $row['id'];?>" class="badge badge-success">Update</a>
                            </td>
                        </tr>

                    <?php }

                } else{

                    echo "No data";

                }?>

                </tbody>
            </table>

        </section>
    </section>

<?php require_once('footer.php');?>
<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 7/6/2021
 * Time: 1:53 PM
 */

class articles extends DBconnection
{



    public function insert(){

        $msg = "";
        if(isset($_POST['submit_article'])){

            // The path to store the uploaded image
            $target = "../images/".basename($_FILES['image']['name']);
            $image = $_FILES['image']['name'];

            $author = $_POST['author'];
            $date = $_POST['date'];
            $content = $_POST['content'];
            $title = $_POST['title'];

                $query = "INSERT INTO articles (author,date,content,title,image) 
              VALUES ('$author', '$date','$content', '$title','$image') ";

                $sql = mysqli_query($this->connection, $query);

                if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
                   echo $msg = "Image uploaded succesfully";
                } else{
                    echo $msg = "There was a problem uploading image";
                }

                if($sql){
                    echo "<script>alert('Article Created');</script>";
                } else{

                    echo "<script>alert('Article Failed');</script>";
                }
        }
    }


    public function fetch(){

        $data = null;

        $query = "SELECT * FROM articles";

        if($sql = $this->connection->query($query)){
            while ($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }

        return $data;

    }


    public function fetch_single($id){

        $data = null;
        $query = "SELECT * FROM articles WHERE id='$id'";

        if($sql = $this->connection->query($query)){
            while ($rows = mysqli_fetch_assoc($sql)){
                $data[] = $rows;
            }
        } else{
            mysqli_error($this->connection);
        }
        return $data;
    }



public function delete_single_article($id){

    $query = "DELETE FROM articles WHERE id='$id'";

    if ($sql = $this->connection->query($query)) {
       return true;
    } else {
      return false;
    }
}


public function edit($id){

    $data = null;
    $query = "SELECT * FROM articles WHERE id='$id'";

    if($sql = $this->connection->query($query)){
        while ($rows = mysqli_fetch_assoc($sql)){
            $data[] = $rows;
        }
    } else{
        mysqli_error($this->connection);
    }
    return $data;

}

    public function update_article($data){

        $query = "UPDATE articles SET author='$data[author]',  date='$data[date]',  content='$data[content]',  title='$data[title]' WHERE id='$data[id]'";

        if($sql = $this->connection->query($query)){
            return true;
        }
        else{
            return false;
        }
    }



}
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

        if(isset($_POST['submit_article'])){

            $author = $_POST['author'];
             $date = $_POST['date'];
             $content = $_POST['content'];
             $title = $_POST['title'];

            $query = "INSERT INTO articles (author,date,content,title) 
              VALUES ('$author', '$date','$content', '$title') ";

            $sql = mysqli_query($this->connection,$query);

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

    $query = "UPDATE articles SET author = '$data[author]', '$data[title]', '$data[date]', '$data[content]' WHERE id = '$data[id]'";

    if($sql = $this->connection->query($query)){
        return true;
        }
     else{
        return false;
    }
}


}
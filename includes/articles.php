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

}
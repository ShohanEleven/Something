<?php
require_once('../model/db.php');
if($_SERVER['REQUEST_METHOD']==='POST')
   
{
    $title = $_POST["title"];
    $src = $_FILES['myfile']['tmp_name'];
    $des = $_FILES['myfile']['name'];
    $uploads_dir = '../asset/img';

 move_uploaded_file($src, $uploads_dir.'/'. $des);
 $sql = "INSERT INTO fileup (title,image) VALUES ('$title','$des')";
 if (mysqli_query($conn, $sql)) {
    echo "File Successfully Uploaded";
    } else {
    echo "Error";
    }

    mysqli_close($conn);
 
}



?>

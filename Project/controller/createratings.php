<?php
require_once('../model/db.php');
$errors=[];
$rating='';
if($_SERVER['REQUEST_METHOD']==='POST')
{

$rating=$_POST['rating'];
if(!$rating){
    $errors[]='operation Failed';
}
if(empty($errors)){
    $sql = "INSERT INTO ratings (rating)
    VALUES (
        '". $rating."'
    )";
    if (mysqli_query($conn, $sql)) {
        echo "";
        } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
}


    $rating = $_POST['rating'];

    sleep(3);

    if($rating != ""){
        echo "Ratings Updated";
    }else{
        echo "Null value";
    }

?>
   
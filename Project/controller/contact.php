<?php
require_once('../model/db.php');
$errors=[];
$contact='';
if($_SERVER['REQUEST_METHOD']==='POST')
{

$contact=$_POST['contact'];
if(!$contact){
    $errors[]='Contact Failed';
}
if(empty($errors)){
    $sql = "INSERT INTO contactbuyer (contact)
    VALUES (
        '". $contact."'
    )";
    if (mysqli_query($conn, $sql)) {
        echo "";
        } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
        
    }
    }

    $contact = $_POST['contact'];

    sleep(3);

    if($contact != ""){
        echo " Message Sent";
    }else{
        echo "Null value";
    }

    ?>

  

    
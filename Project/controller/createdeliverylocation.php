<?php
require_once('../model/db.php');
$errors=[];
$house='';
$road='';
$block='';
$area='';



if($_SERVER['REQUEST_METHOD']==='POST')
{
$house=$_POST['house'];
$road=$_POST['road'];
$block=$_POST['block'];
$area=$_POST['area'];




if(!$house){
    $errors[]='house number required';
}
if(!$road){
    $errors[]='road number required';
}
if(!$block){
    $errors[]='block number required';
}
if(!$area){
    $errors[]='area name required';
}


if(empty($errors)){
    $sql = "INSERT INTO deliverylocation (house,road,block,area)
    VALUES ('". $house."',
    '". $road ."',
    '". $block ."',
    '". $area ."'
   
    )";
    if (mysqli_query($conn, $sql)) {
    echo "Your query posted successfully";
    } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: ../view/showupdatedeliverylocation.php");
}
}

?>
<!DOCTYPE html>
 
 <head>
     <title>Update</title>
     <link rel="stylesheet" href="../asset/home.css">
 </head>
  
 
<form action="" method="post">
<div class=center>
<marquee behavior="scroll"direction="right"> <h1>Update Delivery Location</h1><br> </marquee>
        
        
        
        <h3>Update Location</h3> 
        <table>
        <tr>
         <td> 
           
                 Delivery House: 
                 <input type="text" name="house" >
                
                 <br><br>
           
         </td>
     
 </tr>
         <tr>
             <td> 
               
                     Delivery Road:
                     <input type="text" name="road" >
                    
                     <br><br>
               
             </td>
         
     </tr>

 <tr>
     <td> 
       
             Delivery Block: 
             <input type="text" name="block" >
            
             <br><br>
       
     </td>
 
 </tr>
 <tr>
     <td> 
       
             Delivery Area: 
             <input type="text" name="area" >
            
             <br><br>
       
     </td>
 
 </tr>
 
 
        
         </table>
         <input type="submit"  name="submit" value="Submit">
         <a href="../view/home.html">Back</a>
         </form>
</div>
     </body>
     </html>
  
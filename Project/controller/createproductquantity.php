<?php
require_once('../model/db.php');
$errors=[];
$quantity='';
if($_SERVER['REQUEST_METHOD']==='POST')
{

$quantity=$_POST['quantity'];
if(!$quantity){
    $errors[]='operation Failed';
}
if(empty($errors)){
    $sql = "INSERT INTO product (quantity)
    VALUES (
        '". $quantity."'
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Your query posted successfully";
        } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
        header("Location: ../view/showproductquantity.php");
    }
    }
    
    ?>
    <!DOCTYPE html>
 
 <head>
     <title>Contact</title>
     <link rel="stylesheet" href="../asset/home.css">
 </head>
  
 
<form action="" method="post">
    
<div class=center>
<marquee behavior="scroll"direction="right"> <h1>Update Product Quantity</h1><br> </marquee>
        
        
        
        <h3>Product Quantity</h3> 
        <table>
      
        <tr>
         <td> 
           
                 Type : 
                 <input type="text" name="quantity" >
                
                 <br><br>
           
         </td>
     
 </tr>
 </table>
         <input type="submit"  name="submit" value="Send">
         <a href="../view/home.html">Back</a>
         </form>
</div>
     </body>
     </html>
  

    
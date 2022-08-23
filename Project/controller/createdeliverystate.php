<?php
require_once('../model/db.php');
$errors=[];
$order_serial='';
$delivery_state='';
$quantity='';
$due_amount='';

if($_SERVER['REQUEST_METHOD']==='POST')
{
$order_serial=$_POST['order_serial'];
$delivery_state=$_POST['delivery_state'];
$quantity=$_POST['quantity'];
$due_amount=$_POST['due_amount'];



if(!$order_serial){
    $errors[]='Order serial required';
}
if(!$delivery_state){
    $errors[]='Delivery State required';
}
if(!$quantity){
    $errors[]='Product Quantity required';
}
if(!$due_amount){
        $errors[]='Due Amount';
    }

if(empty($errors)){
    $sql = "INSERT INTO deliverystate (order_serial,delivery_state,quantity,due_amount)
    VALUES ('". $order_serial."',
    '". $delivery_state ."',
    '". $quantity ."',
    '". $due_amount."'
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Your query posted successfully";
        } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
        }

    mysqli_close($conn);
    header("Location: ../view/showupdatedeliverystate.php");
}
}

?>

<!DOCTYPE html>
 
 <head>
     <title>Update</title>
     <link rel="stylesheet" href="../asset/home.css">
     <script src="deliverystatevalidation.js"></script>
 </head>
  
 
<form action="" onsubmit="return validateForm()" method="post">
    
        
        
    <div class=center>
    <marquee behavior="scroll"direction="right"><h1> Update Delivery State</h1></marquee>
        <h3>Order Update</h3> 
        <table>
        <tr>
         <td> 
           
                 Order ID: 
                 <input type="text" id="order_id" name= "order_id" >
                
                 <br><br>
           
         </td>
     
 </tr>
         <tr>
             <td> 
               
                     Order Serial Number:
                     <input type="text" id="order_serial" name="order_serial">   
                    
                     <br><br>
               
             </td>
         
     </tr>

 <tr>
     <td> 
       
             Delivery State : 
             <input type="text" id="delivery_state" name="delivery_state">  
            
             <br><br>
       
     </td>
 
 </tr>
 <tr>
     <td> 
       
             Quantity: 
             <input type="text" id="quantity" name="quantity">   
            
             <br><br>
       
     </td>
 
 </tr>
 <tr>
     <td> 
       
             Due Amount: 
             <input type="text" id="due_amount" name= "due_amount">  
            
             <br><br>
       
     </td>
 
 </tr>
        
         </table>
        <p id="show"></p>
         <input type="submit"  name="submit" value="Submit">
         <a href="../view/home.html">Back</a>
         
         </form>
         
</div>
         
     </body>
     </html>
     
  
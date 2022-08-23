<?php
require_once('../model/db.php');
$errors=[];

$date='';
$month='';
$year='';


if($_SERVER['REQUEST_METHOD']==='POST')
{

$date=$_POST['date'];
$month=$_POST['month'];
$year=$_POST['year'];




if(!$date){
    $errors[]='date required';
}
if(!$month){
    $errors[]='month required';
}
if(!$year){
    $errors[]='year required';
}


if(empty($errors)){
    $sql = "INSERT INTO deliverydate (date,month,year)
    VALUES (
        '". $date."',
    '". $month ."',
    '". $year ."'
   
    )";
    if (mysqli_query($conn, $sql)) {
    echo "Your query posted successfully";
    } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: ../view/showupdatedeliverydate.php");
}
}

?>


<!DOCTYPE html>
 
 <head>
     <title>Update</title>
     <link rel="stylesheet" href="../asset/home.css">
     <script src="deliverydatevalidation.js"></script>
 </head>
  
 
 
 <form action="" onsubmit="return validateForm()" method="post">
<div class=center>
    
<marquee behavior="scroll"direction="right"> <h1>Update Delivery Date</h1><br> </marquee>
        
        
        
        <h3>Update Date</h3> 
        <table>
      
        <tr>
         <td> 
           
                 Delivery Date: 
                 <input type="text" id="date" name="date" >
                
                 <br><br>
           
         </td>
     
 </tr>
         <tr>
             <td> 
               
                     Delivery Month:
                     <input type="text" id="month" name="month" >
                    
                     <br><br>
               
             </td>
         
     </tr>

 <tr>
     <td> 
       
             Delivery Year : 
             <input type="text" id="year" name="year" >
            
             <br><br>
       
     </td>
 
 </tr>
 
        
         </table>
         <p id ="bro"></p>
        
         <input type="submit"  name="submit" value="Submit">
         <a href="../view/home.html">Back</a>
         </form>
        
</div>
     </body>
     </html>
  
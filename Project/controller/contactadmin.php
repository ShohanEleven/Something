<?php
require_once('../model/db.php');
$errors=[];
$msg='';
if($_SERVER['REQUEST_METHOD']==='POST')
{

$msg=$_POST['msg'];
if(!$msg){
    $errors[]='Contact Failed';
}
if(empty($errors)){
    $sql = "INSERT INTO contactadmin (msg)
    VALUES (
        '". $msg."'
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Your query posted successfully";
        } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
        header("Location: ../view/showcontactadmin.php");
    }
    }
    
    ?>
    <!DOCTYPE html>
 
 <head>
     <title>Contact</title>
     <link rel="stylesheet" href="../asset/home.css">
     <script src="contactadmin.js"></script>
 </head>
 <form action="" onsubmit="return validateForm()" method="post">
 

<div class=center>
   
<marquee behavior="scroll"direction="right"> <h1>Contact With Admin</h1><br></marquee>
        
        
        
        <h3>Contact Admin</h3> 
        <table>
        <p id="max"></p>
        <tr>
         <td> 
           
                 Send Message: 
                 <input type="text" id="msg" name="msg" >
                
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
  

    
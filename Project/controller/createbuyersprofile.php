<?php
require_once('../model/db.php');
$errors=[];

$name='';
$phono='';
$email='';
$gender='';


if($_SERVER['REQUEST_METHOD']==='POST')
{

$name=$_POST['name'];
$phono=$_POST['phono'];
$email=$_POST['email'];
$gender=$_POST['gender'];




if(!$name){
    $errors[]='name required';
}
if(!$phono){
    $errors[]='phn number required';
}
if(!$email){
    $errors[]='email required';
}
if(!$gender){
    $errors[]='gender required';
}



if(empty($errors)){
    $sql = "INSERT INTO buyersprofile (name,phono,email,gender)
    VALUES (
        '". $name."',
    '". $phono ."',
    '". $email ."',
    '". $gender."'
   
    )";
    if (mysqli_query($conn, $sql)) {
    echo "Your query posted successfully";
    } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: ../view/showbuyersprofile.php");
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

    
    <marquee behavior="scroll"direction="right"> <h1>Update Buyers Profile</h1><br> </marquee>
        
        <h3>Buyers Profile</h3> 
        <table>
      
        <tr>
         <td> 
           
                 User Name: 
                 <input type="text" name="name" >
                
                 <br><br>
           
         </td>
     
 </tr>
         <tr>
             <td> 
               
                     Phone Number:
                     <input type="text" name="phono" >
                    
                     <br><br>
               
             </td>
         
     </tr>

 <tr>
     <td> 
       
             Email : 
             <input type="text" name="email" >
            
             <br><br>
       
     </td>
 
 </tr>
 <tr>
     <td> 
       
             Gender : 
             <input type="text" name="gender" >
            
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
  
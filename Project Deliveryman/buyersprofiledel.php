<?php 

	$username = $_POST['username'];
	$email = $_POST['email'];
    $phno = $_POST['phonenumber'];
    $occu = $_POST['occupation'];
    $gend = $_POST['gender'];
   
    
	if($username == null || $email == null|| $phno ==null||$occu==null||$gend==null ){
		echo "Please enter information";
	}else{

		$user = $username."|".$email."|".$phno."|".$occu."|".$gend."\r\n";
		$file = fopen ('buyer.txt','a');
		fwrite($file, $user);
		header('location:home.html ');
	}




?>
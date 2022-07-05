<?php 

	$username = $_POST['username'];
	$email = $_POST['email'];
    $phno = $_POST['phonenumber'];
   
    
	if($username == null || $email == null|| $phno ==null ){
		echo "Please enter information";
	}else{

		$user = $username."|".$email."|".$phno."\r\n";
		$file = fopen ('farmer.txt','a');
		fwrite($file, $user);
		setcookie('status', 'true', time()+86400*30, '/');
		header('location:home.html ');
	}




?>
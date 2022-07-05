<?php 
	

	 
	$username = $_POST['username'];
	$password = $_POST['password'];
	//echo $username;

	if($username == null || $password == null){
		echo "Enter your Username & Password";
	}else{
		
			$file = fopen('userrr.txt', 'r');
		
	      	while (!feof($file)) {
			$data=fgets($file);
			$admin = explode('|', $data);
			if($username == trim($admin[0]) && $password == trim($admin[1])){
				
                setcookie('status', 'true', time()+86400*30, '/');
			
				header('location:home.html');
			}
		
	    	
		}
		echo "invalid user"; 

	}


	
?>
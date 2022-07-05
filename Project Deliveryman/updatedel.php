<?php 

	$upp= $_POST['update'];
    
	
    
	if($upp== null ){
		echo "Please enter information";
	}else{

	
    $file= fopen('update.txt','a');
    $user = $upp."\r\n";
    fwrite($file,$user);
    header('location:home.html');
}




?>









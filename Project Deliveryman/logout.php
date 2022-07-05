<?php 

	session_start();
	session_destroy();
    echo "Eleven";
	setcookie('status', 'true', time()-100, '/');
	header('location: logindel.html');
    
?>
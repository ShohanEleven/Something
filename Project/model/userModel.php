<?php


require_once "db.php";

    function login($user_name, $password){
        $conn = getConnection();
		$sql = "SELECT * FROM signup where user_name='{$user_name}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }

}

    function signup ($user_name,$password, $cPassword, $email, $phnNum){
        $conn = getConnection();
		$sql = "INSERT INTO signup (user_name,password, cPassword ,email, phnNum ) values ('$user_name','$password', '$cPassword','$email', '$phnNum')";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }
?>
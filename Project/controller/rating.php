<?php 

    $rating = $_POST['rating'];

    sleep(3);

    if($rating != ""){
        echo "Ratings Updated";
    }else{
        echo "Null value";
    }

?>
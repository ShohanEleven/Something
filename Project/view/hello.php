<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Using JSON</title>
</head>
<body>
<table border="1" align="center">
    <tr>
        <td colspan="7" align="right"><a href="cratejson.php">Add</a></td>
    </tr>
    <tr>
        <td>name</td>
        <td>email</td>
        <td>contact</td>
       
    </tr>
    <?php
		$data = file_get_contents('Veee.json');
		$data = json_decode($data);
		$index = 1;
		if(!empty($data)){
		foreach($data as $row){			
        ?>
        <tr>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->contact; ?></td>
            
        </tr>
        <?php
		$index++;
		}
    }
    ?>
   
</table>
</body>
</html>
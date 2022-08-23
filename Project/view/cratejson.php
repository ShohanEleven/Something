<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Add Comment Using JSON</title>
</head>
<body>
<?php
 if(isset($_POST['btnadd'])){
 $data = file_get_contents('Veee.json');
 $data = json_decode($data, true);
 $add_arr = array(
 'name' => $_POST['txtFname'],
 'email' => $_POST['txtLname'],
 'contact' => $_POST['txtAddress'],
 
 );
 $data[] = $add_arr;
 
 $data = json_encode($data, JSON_PRETTY_PRINT);
 file_put_contents('Veee.json', $data);
 
 header('location: hello.php');
 }
?>
<form method="post" name="frmAdd">
        <table align="center">
            <tr>
                <td colspan="2" align="center">Add Record</td>
            </tr>
 
            <tr>
                <td> Name</td>
                <td><input type="text" name="txtFname"> </td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="txtLname"> </td>
            </tr>
            <tr>
                <td>contact</td>
                <td><textarea name="txtAddress" rows="4" cols="16"></textarea> </td>
            </tr>
            
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Add" name="btnadd"> </td>
            </tr>
        </table>
</form>
</body>
</html>
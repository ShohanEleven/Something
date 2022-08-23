<?php
require_once('../model/db.php');
if($_SERVER['REQUEST_METHOD']==='POST')
$conn = getConnection();
$sql = "SELECT * FROM fileup ";
$result = mysqli_query($conn, $sql);
while ($)
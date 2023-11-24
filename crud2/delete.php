<?php
// Delete record here...
require('connect.php');
//code for id request from database
$user_id = $_REQUEST['user_id'];

//deleting data from database
$query = "DELETE FROM user WHERE user_id = $user_id";
$request = mysqli_query($connection, $query);
header("location: index.php");
?>
<?php
session_start();
require('include/db-config.php');
$username = $_SESSION['username']; 
$sql=mysqli_query($con,"UPDATE `users` SET `user_status`='0' WHERE `username`='".$username."'");
if($sql){
unset($_SESSION['username']); 
session_destroy();
}
header("location: login.php"); 
exit();
if(!isset($_SESSION['username']))
{
header("location:login.php");
}
?>
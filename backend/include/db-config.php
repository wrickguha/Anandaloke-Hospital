<?php
$server = "localhost";
$db = "anandaloke_datas";
$user = "root";
$pass = "";
$con = new mysqli($server, $user, $pass, $db, 3307);
if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
}
  //echo "Connected successfully";
?>
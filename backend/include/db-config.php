<?php
$server = "localhost";
$db = "anandaloke_datas";
$user = "anandaloke_datar";
$pass = "*(jh9ryu&^ghyer";
$con = new mysqli($server, $user, $pass, $db);
if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
}
  //echo "Connected successfully";
?>
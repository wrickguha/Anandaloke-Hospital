<?php
include('backend/include/db-config.php');
if(isset($_POST['department'])){
$department = $_POST['department'];
$sql= "select doctor_name from doctors where department_id='".$department."'";
$query = $con->query($sql);
echo '<option value="">Choose Doctor</option>';
while($res = $query->fetch_assoc()){
echo '<option value="'.$res['doctor_name'].'">'.$res['doctor_name'].'</option>'; 
}
}
?>
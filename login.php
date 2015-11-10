<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$userId = $_POST('userId');
$emailId = $_POST('emailId');
$password = $_POST('password');

require_once('dbConnect.php');
$sql = "SELECT * FROM user WHERE (userId='$userId' OR emailId='$emailId') AND password='$password'";
$check = mysqli_fetch_array(mysqli_query($con,$sql));
if(isset($check)){
	echo 'true';
}else{
	echo 'false';
}
mysqli_close($con);
}else{
	echo 'error';
}
?>
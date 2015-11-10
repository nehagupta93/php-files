<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$userId = $_POST('userId');
	$emailId = $_POST('emailId');
	
	require_once('dbConnect.php');
	$sql = "SELECT * FROM user WHERE userId='$userId' OR emailId='$emailId'";
	$check = mysqli_fetch_array(mysqli_query($con, $sql));
	if(isset($check)){
		echo 'User found';
	}else{
		echo 'User does not exist';
	}
	mysqli_close($con);
}else{
	echo 'error';
}
?>
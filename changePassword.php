<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$userId = $_POST['userId'];
	$newPassword = $_POST['newPassword'];

	require_once('dbConnect.php');
	$sql = "SELECT * FROM user WHERE userId='$userId'";
	
	$check = mysqli_fetch_array(mysqli_query($con,$sql));
	
	if (isset($check)){
		$sql = "UPDATE user SET password='$newPassword' WHERE userId='$userId'";
		if(mysqli_query($con,$sql)){
		echo 'Successfully changed password';
		}else{
		echo 'Oops! Please try again';
		}
	}else{
		echo 'error';
	}
	mysqli_close($con);
}else{
	echo 'error';
}

?>
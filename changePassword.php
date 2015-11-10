<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$userId = $_POST['userId'];
	$oldPassword = $_POST['oldPassword'];
	$newPassword = $_POST['newPassword'];

	require_once('dbConnect.php');
	$sql = "SELECT * FROM user WHERE userId='$userId' AND password = '$oldPassword'";
	
	$check = mysqli_fetch_array(mysqli_query($con,$sql));
	
	if (isset($check)){
		$sql = "UPDATE user SET password='$newPassword' WHERE userId='$userId'";
		if(mysqli_query($con,$sql)){
		echo 'Successfully changed password';
		}else{
		echo 'Oops! Please try again';
		}
	}else{
		echo 'old password incorrect';
	}
	mysqli_close($con);
}else{
	echo 'error';
}

?>
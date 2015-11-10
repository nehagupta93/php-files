<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$emailId = $_POST['emailId'];
	$newPassword = $_POST['newPassword'];
	$subject = 'Forgot Laen-Daen Password';
	$from = 'support@laendaen.esy.es';
	$headers = 'From: ' . $from;
	$message = 'Your new password is: ' . $newPassword;
	
	require_once('dbConnect.php');
	$sql = "SELECT * FROM user WHERE emailId='$emailId'";
	
	$check = mysqli_fetch_array(mysqli_query($con, $sql));
	
	if (isset($check)){
		$sql = "UPDATE user SET password='$newPassword' WHERE emailId='$emailId'";
		if(mysqli_query($con,$sql)){
			mail($email,$subject,$message,$headers);
			echo 'check email for new password';
		}else{
			echo 'Oops! Please try again';
		}
	}else{
		echo 'email-ID not registered';
	}
	mysqli_close($con);
}else{
	echo 'error'
}
?>
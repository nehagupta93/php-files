<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$userId = $_POST['userId'];
$emailId = $_POST['emailId'];
$password = $_POST['password'];
$balance = $_POST['balance'];

require_once('dbConnect.php');
$sql = "SELECT * FROM user WHERE userId='$userId' OR emailId='$emailId'";
	
$check = mysqli_fetch_array(mysqli_query($con,$sql));
	
if(isset($check)){
	echo 'userID or emailID already exists';
}else{
	$sql = "INSERT INTO user (userID,emailID,password,balance) VALUES ('$userID','$emailID','$password','$balance')";
	if(mysqli_query($con,$sql)){
		echo 'Successfully registered';
	}else{
		echo 'Oops! Please try again';
	}
}
mysqli_close($con);
}else{
	echo 'error';
}
?>
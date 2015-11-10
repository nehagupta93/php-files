<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$index = $_POST['index'];
	
	require_once('dbConnect.php');
	$sql = "UPDATE laenDaen SET laendarConfirmation=true,daendarConfirmation=true WHERE index='$index'";
	if(mysqli_query($con,$sql)){
		echo 'Laen-Daen Confirmed';
	}else{
		echo 'error';
	}
	mysqli_close($con);
}else{
	echo ''error;
}
?>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$index = $_POST['index'];
	$amount = $_POST['amount'];
	$laendar = $_POST['laendar'];
	$daendar = $_POST['daendar'];
	
	require_once('dbConnect.php');
	$sql = "UPDATE laenDaen SET laendarConfirmation=true,daendarConfirmation=true WHERE index='$index'";
	$sql1 = "UPDATE user SET balance=balance+'$amount' WHERE userId='$daendar'";
	$sql2 = "UPDATE user SET balance=balance-'$amount' WHERE userId='$laendar'";
	if(mysqli_query($con,$sql)&&mysqli_query($con,$sql1)&&mysqli_query($con,$sql2)){
		echo 'Laen-Daen Confirmed';
	}else{
		echo 'error';
	}
	mysqli_close($con);
}else{
	echo ''error;
}
?>
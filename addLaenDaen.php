<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$laendar = $_POST['laendar'];
	$lc = $_POST['lc'];
	$daendar = $_POST['daendar'];
	$dc = $_POST['dc'];
	$date = $_POST['date'];
	$amount = $_POST['amount'];
	$reason = $_POST['reason'];
	
	require_once('dbConnect.php');
	$sql = "INSERT INTO laenDaen (laendar,laendarConfirmation,daendar,daendarConfirmation,amount,date,reason) VALUES ('$laendar','$lc','$daendar','$dc','$amount','$date','$reason')";
	if (mysqli_query($con,$sql)){
		echo 'Laen-Daen Created';
	}else{
		echo 'error';
	}
}else{
	echo 'error';
}
?>
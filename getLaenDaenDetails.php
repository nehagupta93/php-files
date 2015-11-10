<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$index = $_POST['index'];
	
	require_once('dbConnect.php');
	$sql = "SELECT * FROM laenDaen WHERE index='$index'";	
	$result = mysqli_fetch_assoc(mysqli_query($con,$sql));
	$response = $result["laendar"] . "," . $result["laendarConfirmation"] . "," . $result["daendar"] . "," . $result["daendarConfirmation"] . "," . $result["amount"] . "," . $result["date"] . "," . $result["reason"] . "," . $result["timeStamp"] . ",";
	echo $response;
	
	mysqli_close($con);
}else{
	echo 'error';
}
?>
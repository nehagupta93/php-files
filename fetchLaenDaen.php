<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$tag = $_POST['tag'];
	$userId = $_POST['userId'];
	
	require_once('dbConnect.php');
	$sql = "";
	$indices = '';
	if ($tag=='laendars'){
		$sql = "SELECT index FROM laenDaen WHERE daendar='$userId' AND laendarConfirmation=true AND daendarConfirmation==true";
	}else if($tag=='daendars'){
		$sql = "SELECT index FROM laenDaen WHERE laendar='$userId' AND laendarConfirmation=true AND daendarConfirmation=true";
	}else if($tag=='laendarRequests'){
		$sql = "SELECT index FROM laenDaen WHERE daendar='$userId' AND daendarConfirmation=false";
	}else if($tag=='laendarsRequested'){
		$sql = "SELECT index FROM laenDaen WHERE daendar='$userId' AND laendarConfirmation=false";
	}else if($tag=='daendarRequests'){
		$sql = "SELECT index FROM laenDaen WHERE laendar='$userId' AND laendarConfirmation=false";
	}else{
		$sql = "SELECT index FROM laenDaen WHERE laendar='$userId' AND daendarConfirmation=false";
	}
	$result = mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($result)){
		$indices = $indices . ',' . $row["index"] . ',';
	}
	echo $indices;
	mysqli_close($con);
}else{
	echo 'error';
}
?>
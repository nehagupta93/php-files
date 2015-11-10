<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$tag = $_POST('tag');
$id = $_POST('id');

require_once('dbConnect.php');

if (tag=='userId'){
	$sql = 	"SELECT userId FROM user WHERE emailId='$id'";
	$data = mysqli_fetch_assoc(mysqli_query($con,$sql));
	echo $data["userId"];
}else if(tag=='emailId'){
	$sql = "SELECT emailId FROM user WHERE userId='$id'";
	$data = mysqli_fetch_assoc(mysqli_query($con,$sql));
	echo $data["emailId"];
}else if (tag=='password'){
	$sql = "SELECT password FROM user WHERE userId='$id'";
	$data = mysqli_fetch_assoc(mysqli_query($con,$sql));
	echo $data["password"];
}else{
	$sql = "SELECT balance FROM user WHERE userId='$id'";
	$data = mysqli_fetch_assoc(mysqli_query($con,$sql));
	echo $data["balance"];
}
mysqli_close($con);
}else{
	echo 'error';
}
?>
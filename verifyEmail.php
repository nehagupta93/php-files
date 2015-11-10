<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$code = $_POST['code'];
$emailId = $_POST['emailId'];
$subject = 'LaenDaen Verification Code';
$from = 'support@laendaen.esy.es';
$headers = 'From: ' . $from;
$message = 'Your LaenDaen Register Verification Code is: ' . $code;
mail($email,$subject,$message,$headers);
}else{
	echo 'error';
}
?>
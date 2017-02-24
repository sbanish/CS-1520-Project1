<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$to = 'myemail';
	$subject = 'Website Contact Form';
	$msg = $name . " " . $email . " " . $message;
	
	mail($to, $subject, $msg);
?>
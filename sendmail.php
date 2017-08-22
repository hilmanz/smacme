<?php
require_once "config/config.inc.php";
require_once "engines/Mailer.php";

if ($_POST["email"]<>'') { 
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$country = $_POST['country'];
	$message = $_POST['message'];
	$formcontent=" From: $name <br/> Email: $email <br/> Phone: $phone <br/> Country: $country <br/> Message: $message";
	$recipient = "support@smacapp.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	
	$mail = new Mailer();
	$mail->setSubject("SMAC - Contact Us");
	$mail->setSender($email);
	$mail->setMessage($formcontent);
	$mail->setRecipient($recipient);
	
	if( $mail->send() ){
		header( 'Location: index.php?menu=contact&err=1' );
	}else{
		header( 'Location: index.php?menu=contact&err=2' );
	}

}else{
	header( 'Location: index.php?menu=contact&err=2' );
}
?> 
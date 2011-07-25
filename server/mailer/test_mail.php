<?php

require_once('class.phpgmailer.php');

$local_body_string= " Name: ".$_POST['name']."\n Email: ".$_POST['mailid']." \n Message Subject: ".$_POST['subject']." \n Message Description: ".$_POST['description']."\n";

echo "info here".$local_body_string;

$mail = new PHPGMailer();
$mail->AddAddress('aatrala@gmail.com');

$mail->Subject="Mail from Feedback Page mapastaffing.in";
$mail->Body=$local_body_string;

$mail->Send();

?>

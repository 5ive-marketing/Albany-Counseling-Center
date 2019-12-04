<?php

use PHPMailer\PHPMailer\PHPMailer;
require '/vendor/autoload.php';

$mail = new PHPMailer();

$mail->Host       = "relay-hosting.secureserver.net";
$mail->Port       = 25;                   
$mail->SMTPDebug  = 0;
$mail->SMTPSecure = "none";                 
$mail->SMTPAuth   = false;
$mail->Username   = "";
$mail->Password   = "";

$mail->setFrom('email@example.com.', 'My Name');
$mail->addAddress('dominic.groshong@5ivemarketing.com');
$mail->addAddress('another_recipient@email.com');
$mail->isHTML(true);

$mail->Subject = 'Here is the subject';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';


if(!$mail->send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent';
}

?>
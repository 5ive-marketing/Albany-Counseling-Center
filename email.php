<?php

use PHPMailer\PHPMailer\PHPMailer;
require '/vendor/autoload.php';

$mail = new PHPMailer();
$mail->SMTPDebug = 3;
$mail->isSMTP();
$mail->Host = '*********.prod.sin2.secureserver.net';
$mail->SMTPAuth = true;
$mail->Username = '*********'; // This was my GoDaddy cPanel username
$mail->Password = '*********'; // And my GoDaddy cPanel password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

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
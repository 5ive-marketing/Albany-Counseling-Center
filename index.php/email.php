<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Set who the message is to be sent from
$mail->setFrom('from@example.com', 'First Last');

//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('dominic.groshong@5ivemarketing.com', 'Dominic Groshong');

// Content
$mail->isHTML(true); // Set email format to HTML                                 
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}




// if(isset($_POST['email'])) {
 
//     // EDIT THE 2 LINES BELOW AS REQUIRED
//     $email_to = "dominic.groshong@5ivemarketing.com";
//     $email_subject = "Contact Request Submition";
 
//     function died($error) {
//         // your error code can go here
//         echo "We are very sorry, but there were error(s) found with the form you submitted. ";
//         echo "These errors appear below.<br /><br />";
//         echo $error."<br /><br />";
//         echo "Please go back and fix these errors.<br /><br />";
//         die();
//     }
 
 
//     // validation expected data exists
//     if(!isset($_POST['fullName']) ||
//         !isset($_POST['email']) ||
//         !isset($_POST['phone']) ||
//         !isset($_POST['services']) ||
//         !isset($_POST['counselorGender']) ||
//         !isset($_POST['day']) ||
//         !isset($_POST['time']) ||
//         !isset($_POST['clientStatus']) ||
//         !isset($_POST['message'])) {
//         died('We are sorry, but there appears to be a problem with the form you submitted.');       
//     }
 
     
 
//     $name = $_POST['first_name']; // required
//     $email = $_POST['email']; // required
//     $phone = $_POST['phone']; // required
//     $service = $_POST['services']; // required
//     $gender = $_POST['counselorGender']; // required
//     $day = $_POST['day']; // required
//     $time = $_POST['time']; // required
//     $status = $_POST['clientStatus']; // required
//     $message = $_POST['message']; // not required

 
//     $error_message = "";
//     $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
//   if(!preg_match($email_exp,$email)) {
//     $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
//   }
 
//     $string_exp = "/^[A-Za-z .'-]+$/";
 
//   if(!preg_match($string_exp,$name)) {
//     $error_message .= 'The Name you entered does not appear to be valid.<br />';
//   }
 
//     $email_message = "Form details below.\n\n";
 
     
//     function clean_string($string) {
//       $bad = array("content-type","bcc:","to:","cc:","href");
//       return str_replace($bad,"",$string);
//     }
 
//     $name = $_POST['first_name']; // required
//     $email = $_POST['email']; // required
//     $phone = $_POST['phone']; // required
//     $service = $_POST['services']; // required
//     $gender = $_POST['counselorGender']; // required
//     $day = $_POST['day']; // required
//     $time = $_POST['time']; // required
//     $status = $_POST['clientStatus']; // required
//     $message = $_POST['message']; // not required
 
//     $email_message .= "Name: ".clean_string($name)."\n";
//     $email_message .= "Email: ".clean_string($email)."\n";
//     $email_message .= "Phone: ".clean_string($phone)."\n";
//     $email_message .= "Service: ".clean_string($service)."\n";
//     $email_message .= "Prefered Counselor Gender: ".clean_string($gender)."\n";
//     $email_message .= "Prefered Day: ".clean_string($day). "Time: ".clean_string($time)."\n";
//     $email_message .= "Current, Past, New: ".clean_string($status)."\n";
//     $email_message .= "Additional Message: ".clean_string($message)."\n";

// // create email headers
// $headers = 'From: '.$email."\r\n".
// 'Reply-To: '.$email."\r\n" .
// 'X-Mailer: PHP/' . phpversion();
// @mail($email_to, $email_subject, $email_message, $headers);  
// ?>
 
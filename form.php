<?php 
date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailer-5.2-stable/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587; 
$mail->SMTPSecure = 'tls'; 
$mail->SMTPAuth = true; 
$mail->Username = "24.fedik.24@gmail.com"; // Your Gmail address.
$mail->Password = "wxjyslsazvstvual"; // Your Gmail login password or App Specific Password.

$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$visit_email = $_POST['email'];
$phone_number = $_POST['number'];
$message = $_POST['message'];
$email_body = "$name $lastname has a message: '$message'.\r\n Номер телефону : $phone_number.\r\n Пошта: $visit_email.";

$mail->setFrom("$visit_email"); // Set the sender of the message.
$mail->addAddress('fedykkmasha@gmail.com'); // Set the recipient of the message.
$mail->Subject = "New client!"; // The subject of the message.

// Choose to send either a simple text email...
$mail->Body = "$email_body"; // Set a plain text body.

if ($mail->send()) {
    echo "Successfully sent!";
} else {
    echo "Error: " . $mail->ErrorInfo;
}

?>
<?php

$fullname = $_POST["fullname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$kritik = $_POST["kritik"];
$file = $_POST["file"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-relay.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "ramziakbar03311@gmail.com";
$mail->Password = "mmmmmmmm";

$mail->setFrom($email, $name);
$mail->addAddress("munischuman@gmail.com", "Ramzi Akbar Ramadhan");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";
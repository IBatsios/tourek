<?php

/**
 * Include external classes
 */
require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require '../classes/Config.php';


/**
 * Configure PHPMailer with your SMTP server settings
 */
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = Config::SMTP_HOST;
$mail->Port = Config::SMTP_PORT;
$mail->SMTPAuth = true;
$mail->Username = Config::SMTP_USER;
$mail->Password = Config::SMTP_PASSWORD;
$mail->SMTPSecure = 'tls';
$mail->CharSet = 'UTF-8';
$mail->isHTML(true);

/**
 * Send an email
 */

$mail->From = $_POST['sender'];
$mail->FromName = $_POST['name'];
$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'] . " message is from " .  $_POST['sender'];
$mail->addAddress('yanni3003@yahoo.com');
$mail->AddReplyTo($_POST['sender'], $_POST['name']);

if ($mail->send()) {
	header('Location: thanks.html');
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}
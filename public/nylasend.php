<?php

session_start();
/**
 * Include external classes
 */
require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require '../classes/config.php';


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
$mail->Body = "<h4>". $_POST['message'] . "</h4>" . "<br/><p><em>This message generated from michaeltourek.com and the sender's email is " .  $_POST['sender'] . "</em></p>";
$mail->addCC(/*insert agent's email here*/'');
$mail->AddReplyTo($_POST['sender'], $_POST['name']);

if ($mail->send()) {
	echo "<script type='text/javascript'>document.location.href='thanks.html';</script>";
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}
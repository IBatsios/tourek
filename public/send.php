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

$from = $_POST['name'];
$email = $_POST['mail'];
$subject = $_POST['subject'];
$body = $_POST['message'];
$mail->setFrom($email, $from);
$mail->addAddress('ioannisbatsios@gmail.com');
$mail->Subject = $subject;
$mail->Body = $body;

if ($mail->send()) {
	header('Location: thanks.html');
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}
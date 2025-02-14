<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Correct SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'dldoesvisuals@gmail.com'; // Your Gmail address
    $mail->Password   = 'cvuc prcc ekry kzag'; // Your App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('gamosodl@gmail.com', 'Mailer'); // email pagisendan
    $mail->addAddress('gamosodl@gmail.com', 'Recipient Name'); // Add a recipient
    $mail->addReplyTo('dldoesvisuals@gmail.com', 'Information');

    // Attachments
 

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

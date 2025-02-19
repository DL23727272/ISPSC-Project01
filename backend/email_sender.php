<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'psychopage@ispsc.personatab.com';
        // $mail->Password   = 'cvuc prcc ekry kzag';
        $mail->Password   = 'psychoPage@123';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Set sender as your Gmail, but name it after the user
        $mail->setFrom('psychopage@ispsc.personatab.com', $name);  
        $mail->addAddress('psychopage@ispsc.personatab.com', 'Recipient Name'); 
        $mail->addReplyTo($email, $name); 

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "<p><strong>Name:</strong> $name</p>
                          <p><strong>Email:</strong> <a href='mailto:$email'>$email</a></p>
                          <p><strong>Message:</strong><br>$message</p>";
        $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

        $mail->send();
        
        echo json_encode(["status" => "success", "message" => "Message has been sent!"]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => $mail->ErrorInfo]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}
?>

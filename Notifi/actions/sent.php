<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../MailPhP/Exception.php';
require '../MailPhP/PHPMailer.php';
require '../MailPhP/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit; // Stop execution if the email is invalid
    }

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'prithvi07raj07@gmail.com'; // Your Gmail address
        $mail->Password = 'spxadzthwqjseeil'; // Your App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port     = 465;

        //Recipients
        $mail->setFrom('prithvi07raj07@gmail.com', 'Your One Step towards the bright Future'); // Corrected line
        $mail->addAddress($email, ''); // Send to the user's email

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Thank you for subscribing to our newsletter!';
        $mail->Body     = '
            <p>Dear Subscriber,</p>
            <p>Thank you for subscribing to our newsletter! You will now receive weekly updates from us.</p>
            <p>Best regards,</p>
            <p>The Notifi Team</p>
        ';

        $mail->send();
        header("Location: ../src/index.php?subscription=success"); //added a get param to indicate success
        exit;

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
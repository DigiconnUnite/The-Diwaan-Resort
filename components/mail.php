<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendEmail($to, $subject, $body, $fromEmail = 'noreply@diwaanagra.com', $fromName = 'The Diwaan Restaurant') {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com'; // Replace with your email
        $mail->Password = 'your-app-password'; // Replace with your app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function sendAdminNotification($formData, $formType) {
    $adminEmail = 'admin@diwaanagra.com'; // Replace with actual admin email
    $subject = "New $formType Submission - The Diwaan Restaurant";

    $body = "<h2>New $formType Submission</h2>";
    foreach ($formData as $key => $value) {
        $body .= "<p><strong>" . ucfirst($key) . ":</strong> " . htmlspecialchars($value) . "</p>";
    }

    return sendEmail($adminEmail, $subject, $body);
}

function sendUserConfirmation($userEmail, $userName, $formType) {
    $subject = "Thank you for your $formType - The Diwaan Restaurant";

    $body = "
    <h2>Thank You, $userName!</h2>
    <p>We have received your $formType submission.</p>
    <p>Our team will get back to you shortly.</p>
    <p>Best regards,<br>The Diwaan Restaurant Team</p>
    ";

    return sendEmail($userEmail, $subject, $body);
}
?>
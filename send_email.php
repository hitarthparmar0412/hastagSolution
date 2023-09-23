<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    // Configure your Gmail SMTP settings
    $to = 'hitarth.parmar0412@gmail.com'; // Replace with the recipient's email address
    $subject = 'New Contact Form Submission';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $messageBody = "Name: $name\nEmail: $email\nMobile: $mobile\n\n$message";

    // Send the email using Gmail SMTP
    if (mail($to, $subject, $messageBody, $headers)) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "mohamedghaithhedi@gmail.com"; // Replace with your desired email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Message:\n$message";
    
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you for your message. We'll be in touch shortly!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>

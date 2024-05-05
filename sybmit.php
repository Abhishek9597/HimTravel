<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email details
    $to = "your@example.com"; // Change this to your email address
    $subject = "Message from Himachal Pradesh Tours";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        // If email is sent successfully
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        // If there is an error sending email
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the form is not submitted
    echo "Access denied.";
}
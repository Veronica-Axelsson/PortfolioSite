<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "millernadragon@hotmail.com"; // Your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        // Redirect to thank you page
        header("Location: thank_you.html");
        exit; // Ensure that script execution stops after redirection
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Access denied";
}
?>
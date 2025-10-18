<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Your company email address
    $to = "lesoleilenterprises6@gmail.com";  // 🔹 change this to your real email

    $subject = "New Solar Enquiry from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to thank you page
        header("Location:thank you.html");
        exit();
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
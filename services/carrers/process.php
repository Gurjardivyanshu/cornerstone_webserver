<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone-No'];
    $message = $_POST['Message'];

    $to = 'divyanshuhoonccs@gmail.com';
    $subject = 'New Contact Form Submission';
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";
    $headers = 'From: divyanshuhoonccs@gmail.com';

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo 'success';
    } else {
        http_response_code(500);
        echo 'error';
    }
} else {
    http_response_code(405);
    echo 'method_not_allowed';
}
?>

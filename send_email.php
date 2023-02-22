<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = 'From: ' . $email . "\r" .
        'Reply-To: ' . $email . "\r" .
        'X-Mailer: PHP/' . phpversion();

    if (mail('lailatulfitriyah9216@gmail.com', 'Contact Form Submission', $message, $headers)) {
        echo 'Success - Your message has been sent.';
    } else {
        echo 'failed - Your message has not been sent.';
    }
}

?>
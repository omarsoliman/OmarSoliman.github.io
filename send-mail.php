<?php
var_dump($post,$GET);exit;
$to      = 'omar.solimann@gmail.com.com';
$subject = 'Github Contact';
$message = 'Test';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
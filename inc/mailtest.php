<?php
$to      = 'anthony@convergentcreative.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: anthonygpero@gmail.com' . "\r\n" .
    'Reply-To: anthonygpero@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
<?php
  $to = "anthony@virtuosic.me";
  $subject = "Gmail POP3 Automator";
  $body = "This message is an automated message from your Server to froce gmail to check your pop 3 account more often";

  mail($to, $subject, $body);
?>

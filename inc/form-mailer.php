<?php

// Mailer module

if ($mailnow == TRUE) {

		$to = "anthony@virtuosic.me, anthony@convergentcreative.com, anthonygpero@gmail.com";
		$subject = "Request for Quote from " . $name;
		$body =
				"Name = " . $name . "\r\n" .
				"Phone = " . $phone . "\r\n" .
				"Email = " . $email . "\r\n" .
				"Service(s) = " . $service . "\r\n" .
				"\r\n" . "Comments: \r\n" . $comment;
		$headers = "From: " . $email . "\r\n" .
		"Reply-To: $email" . "\r\n" .
		'X-mailer: PHP/' . phpversion();
		
		mail($to, $subject, $body, $headers);
		
		// Sends autoreply to the submitter
		$subject2 = 'Thank you for contacting Virtuosic Media';
		$body2 = "Thank you for contacting Virtuosic Media. Someone will get back with you shortly." .  "\r\n" . "Here is the content of your email:" . "\r\n" . $body;
		$headers2 = "From: " . $to;
		
		mail($email, $subject2, $body2, $headers2);
		
		// Returns user to main page and displays confirmation $message
    $messages = "<ul><li>Thank you for contacting us! You should receive an automated follow up concerning this email. If you do not, please check your SPAM folder or try again.</li></ul>";
		
		// Debug output
		/*$messages =
		
				"This is the email<br><br>" . 
				"To: " . $to . "<br>" .
				$headers . "<br>" . 
				"Subject: " . $subject . "<br><br>" .
				$body . "<br><br>" .
				
				"This is the auto-reply<br><br>" . 
				"To: " . $email . "<br>" .
				$headers2 . "<br>" . 
				"Subject: " . $subject2 . "<br><br>" .
				$body2 . "<br><br>"
		; */
		
    print "<script>window.location = '#request-form'</script>";
}

// If for some reason $mailnow is not set to TRUE, sends user back to form with an error message
else {
		$messages = "<ul><li>Oops! Something went wrong!</li></ul>";
		print "<script>window.location = '#request-form'</script>";
}
?>
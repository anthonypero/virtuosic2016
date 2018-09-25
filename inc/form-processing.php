<?php
// Reset variables
//$name = "";
//$email = "";
//$phone = "";
//$comment = "";
//$service = "";
//$nameErr = "";
//$emailErr = "";
//$commentErr = "";
//$mailnow = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Checks if this form has been filled out by a human, rickrolls spambots
  if (!empty($_POST["humancheck"])) {
    print "<script>window.location = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'</script>";
  }
  
  // Tests user input, sets variables
  else {
    
    // Set $name variable
    if (empty($_POST["name"])) {
      $nameErr = "Sorry! We need your name!";
      $name = $_POST["name"];
      //print $nameErr;
    }
    else {
      $name = $_POST["name"];
      //print $name;
    }
    
    // Set $phone variable
    if (!empty($_POST["phone"])) {
      $phone = $_POST["phone"];
      //print $phone;
    }
    
    // Set $email variables
    // Checks to see if Email field has been filled out by the User
    if (empty($_POST["email"])) {
      $emailErr = "You forgot to give us your email!";
      //print $emailErr;
    }
    // Confirms that the email address submitted is in the proper format
    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Sorry! That doesn't look like a real email address!";
      $email = $_POST["email"];
    }
    else {
      $email = $_POST["email"];
      //print $email;
    }
    
    // Set $service variable. Checks to see if the user checked more than one box, if so, impodes array into a single string.
    if (!empty($_POST["service"])) {
      if (is_array($_POST["service"])) {
        $service = implode(', ', $_POST["service"]);
        //print $service;
      }
      else {
        $service = $_POST["service"];
        //print "This is not an array";
      }
    }
    
    // Set $comment variable
    // Checks to make sure the User submitted a comment.
    if (empty($_POST["comment"])) {
      $commentErr = "Don't forget to tell us a little bit about your project!";
      $comment = $_POST["comment"];
      // print $commentErr;
    }
    else {
      $comment = $_POST["comment"];
      // print $comment;
    }
  
    // Checks to see if any error messages have been set and returns user to $messages if so
    if (!empty($nameErr) || !empty($emailErr) || !empty($commentErr)) {
      if (!empty($nameErr) && !empty($emailErr) && !empty($commentErr)) {
        $messages = "<ul><li>$nameErr</li><li>$emailErr</li><li>$commentErr</li></ul>";
      }
      elseif (!empty($nameErr) && !empty($emailErr)) {
        $messages = "<ul><li>$nameErr</li><li>$emailErr</li></ul>";
      }
      elseif (!empty($commentErr) && !empty($emailErr)) {
        $messages = "<ul><li>$emailErr</li><li>$commentErr</li></ul>";
      }
      elseif (!empty($nameErr) && !empty($commentErr)) {
        $messages = "<ul><li>$nameErr</li><li>$commentErr</li></ul>";
      }
      elseif (!empty($nameErr)) {
        $messages = "<ul><li>$nameErr</li></ul>";
      }
      elseif (!empty($emailErr)) {
        $messages = "<ul><li>$emailErr</li></ul>";
      }
      else {
        $messages = "<ul><li>$commentErr</li></ul>";
      }
      
      // Carries form data back into the form
      $nameValue = $name;
      $phoneValue = $phone;
      $commentValue = $comment;
      $emailValue = $email;
      $errorClass = "error";
      
      print "<script>window.location = '#request-form'</script>";
      // print $messages;
    }
    
    // Input validates, so mail the form and return to the main page.
    else {
      
      $errorClass = 'normal';

      // Sets $mailnow to TRUE prior to sending messages, then sends mail
      $mailnow = TRUE;
      require('form-mailer.php');
      // print $messages;
    }
  }
}  
?>
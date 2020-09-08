<?php
// Email Submit

  $name = @trim(stripslashes($_POST['name'])); 
  $email = @trim(stripslashes($_POST['email']));
  $message = @trim(stripslashes($_POST['message'])); 

  $email_from = $email;
  $email_to = 'envalabteam@gmail.com'; //replace with your email

  $message = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

  $success = @mail($email_to, "[Crad Landing] ".$name, $message);

  $noreply = @mail($email_from, "[Crad Landing] Thank you to email us.", "We will be back to you soon!");
?>
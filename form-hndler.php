<?php
    $name = $_POST['name'];
   $visitor_email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];


    $email_from ='domain name';
    $email_subject = 'new form submission';
   $email_body = "user name: $name.\n".
              "user email: $visitor_email.\n"
              "subject: $subject.\n"
              "message: $message.\n"

  $to = 'aishwargika2002@gmail.com';
  $header ="from:$email_from\r\n"
  $header . = "reply-to: ";
   mail($to,$email_subject,$email_body,$header);
  header("location:contact.html")
?>
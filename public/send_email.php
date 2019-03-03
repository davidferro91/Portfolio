<?php

// if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $email_from = $mailFrom;
  $email_subject = "New email from your portfolio website.";
  $mailTo = "david-ferro@sbcglobal.net";

  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from: $name.\n".
    "Email: $mailFrom.\n".
    "Message: $message.\n";

  mail($mailTo, $email_subject, $txt, $headers);
  header("Location: send_email.php?mailsend");
// }

?>
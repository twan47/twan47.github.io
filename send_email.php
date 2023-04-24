<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $business = $_POST["business"];
  $email = $_POST["email"];
  $service = $_POST["service"];
  $description = $_POST["description"];

  $to = "contact@tideworks.info";
  $subject = "New Contact Form Submission";
  $message = "Name: $name\n";
  $message .= "Business: $business\n";
  $message .= "Email: $email\n";
  $message .= "Service Wanted: $service\n";
  $message .= "Description: $description";

  $headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

  mail($to, $subject, $message, $headers);
  header("Location: contact.html?sent=1");
  exit();
}
?>

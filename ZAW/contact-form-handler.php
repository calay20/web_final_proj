<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Create the email body
  $emailBody = "Name: $name\n";
  $emailBody .= "Email: $email\n";
  $emailBody .= "Subject: $subject\n";
  $emailBody .= "Message: $message\n";

  // Set the recipient email address
  $recipientEmail = 'julioylacen@gmail.com'; // Replace with your actual email address

  // Set the email subject
  $emailSubject = 'New Contact Form Submission';

  // Set the email headers
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";

  // Send the email
  if (mail($recipientEmail, $emailSubject, $emailBody, $headers)) {
    // Email sent successfully
    echo 'success';
  } else {
    // Failed to send email
    echo 'error';
  }
}
?>

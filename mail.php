<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //Method accepted
} else {
  exit('Invalid request!');
}

$name = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent = "From: $name \n Phone : $phone \n Email: $email \n Message : $message";
$recipient = "lucian@murmurache.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

if(!empty($_POST['fname']) && !empty($_POST['email']) && !empty(['message'])) {

  $fname = trim(htmlspecialchars($_POST['fname']));

  $email = trim(htmlspecialchars($_POST['email']));
  $email = filter_var($email, FILTER_VALIDATE_EMAIL);
  if ($email === false) {
    exit('Invalid email');
  }

  $phone = trim(htmlspecialchars($_POST['phone']));

  $message = trim(htmlspecialchars($_POST['message']));
}

mail($recipient, $subject, $formcontent, $mailheader) or die("An error occurred, try again!");
echo "Thank you for your message, I will get back to you shortly!";
?>

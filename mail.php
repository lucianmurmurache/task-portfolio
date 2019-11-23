<?php $name = $_POST['fname'];
$email = $_POST['email'];
$phoe = $_POST['phone'];
$message = $_POST['message'];
$formcontent = "From: $name \n Message : $message";
$recipient = "lucian@murmurache.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("An error occurred, try again!");
echo "Thank you for your message!";
?>

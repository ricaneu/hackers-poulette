<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Subject: $subject \n Message: $message";
$recipient = "ricaneu@gmail.COM";
$subject = "subject";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You for your message! We will contact you as soon as possible" . " -" . "<a href='form.html' style='text-decoration:none;color:#0d8187;'> Return Home</a>";
?>
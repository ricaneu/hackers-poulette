<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL); // to show error but doesn't work
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$error = [] ;

///var_dump()- use that to test the value of the variable

if (empty($name)) {    
    $error[] = 'please write your name';
}

if (empty($gender)) {    
    $error[] = 'please write your gender';
}

if (empty($email)) {    
    $error[] = 'please write your email';
}

if (empty($country)) {    
    $error[] = 'please write your country';
}

if (empty($message)) {    
    $error[] = 'please write your message';
}


if (!empty($error)) {
    print_r ($error);
    $a = "<a href='form.html' style='text-decoration:none;color:#0d8187;'> Return Home</a>";
    print_r ($a);
}else {
    $formcontent=htmlspecialchars(" From: $name \n Email: $email \n Subject: $subject \n Message: $message");
    // htmlspecialchars is for sanitizing
    $recipient = "ricaneu@gmail.COM";
    $subject = "subject";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    $a = "Thank You for your message! We will contact you as soon as possible" . " -" . "<a href='form.html' style='text-decoration:none;color:#0d8187;'> Return Home</a>";
    print_r ($a);
}




?>
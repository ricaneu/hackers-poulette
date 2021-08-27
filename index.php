<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" charset="utf-8" />

    <title>Hackers Poulette</title>
    <link rel="icon" type="image/png" href="hackers-poulette-logo.png">
</head>
<body>
    <?php
    //this is data handling part
    if (!empty ($_POST)) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $error = [] ;
        
        if (empty($name)) {    
            $error["name"] = 'please write your name'; //inside array in any quotes i write index (name or gender...) for error message
        }
        
        if (empty($gender)) {    
            $error["gender"] = 'please write your gender';
        }
        
        if (empty($email)) {    
            $error["email"] = 'please write your email';
        }
        
        if (empty($country)) {    
            $error["country"] = 'please write your country';
        }
        
        if (empty($message)) {    
            $error["message"] = 'please write your message';
        }
    }
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL); // to show error but doesn't work


///var_dump()- use that to test the value of the variable




if (!empty ($_POST) && empty ($error)) {
    $formcontent=htmlspecialchars(" From: $name \n Email: $email \n Subject: $subject \n Message: $message");
    // htmlspecialchars is for sanitizing
    $recipient = "ricaneu@gmail.COM";
    $subject = "subject";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    $a = "Thank You for your message! We will contact you as soon as possible" . " -" . "<a href='form.html' style='text-decoration:none;color:#0d8187;'> Return Home</a>";
    print_r ($a);
}
else {
//this part is showing data (the view part)
///value="<?php echo $name;" i use this to save the information in the boxes in case of error message.
//I place it between the input tags.
?>
    <script src="contactform.js" id="form"></script>
    <form action="index.php" method="POST">
        <p>Name, Last name</p>
        <?php
        echo $error["name"];
        ?>
        <input type="text" name="name" value="<?php echo $name; ?>" >
        <p>Gender</p>
        <?php
        echo $error["gender"];
        ?> <input type="text" name="gender" value="<?php echo $gender; ?>" >
        <p>Email</p>
        <?php
        if (!empty($error["email"])) {    //executes only when this field has an error
        echo "<p class='danger'>".$error["email"]."</p>"; // we add message with class which will be styled in CSS (add properties to this error)
    }
        ?> <input type="text" name="email" value="<?php echo $email; ?>" >
        <p>Country</p>
        <?php
        echo $error["country"];
        ?> <input type="text" name="country" value="<?php echo $country; ?>" >
        
        <p>Subject</p>
        <select name="type" size="1"  class="form-select">
        <option value="update">Product</option>
        <option value="change">Information</option>
        <option value="addition">Billing</option>
        
        </select>
        <br />
        
        <p>Message</p>
        <?php
        echo $error["message"];
        ?>
        <textarea name="message" rows="6" cols="25"><?php echo $message; ?></textarea>
        <br />
        <input type="submit" value="Send"><input type="reset" value="Clear">
        </form>


        <?php
}
        ?>
        
</body>
</html>
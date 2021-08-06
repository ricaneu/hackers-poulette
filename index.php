<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />

    <title>Hackers Poulette</title>
    <link rel="icon" type="image/png" href="hackers-poulette-logo.png">
</head>
<body>
    <form action="contact.php" method="POST">
        <p>Name, Last name</p> <input type="text" name="name">
        <p>Gender</p> <input type="text" name="gender">
        <p>Email</p> <input type="text" name="email">
        <p>Country</p> <input type="text" name="country">
        
        <p>Subject</p>
        <select name="type" size="1">
        <option value="update">Product</option>
        <option value="change">Information</option>
        <option value="addition">Billing</option>
        
        </select>
        <br />
        
        <p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
        <input type="submit" value="Send"><input type="reset" value="Clear">
        </form>

        
</body>
</html>

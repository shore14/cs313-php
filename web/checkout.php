<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="alert('Thanks')">
    First Name: <input type="text" name="first" value="<?php echo $first;?>">
    Last Name: <input type="text" name="last" value="<?php echo $last;?>">
    Email: <input type="text" name="email" value="<?php echo $email;?>">
    Address: <input type="text" name="add" value="<?php echo $add;?>">
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
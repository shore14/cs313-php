<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="home.css" />
</head>
<body>
    <div class="nav">
    <a href="shoppingCart.php">Back to Cart</a>
</div>
    <form action="thanks.php" method="post">
    First Name: <input type="text" name="first" value="<?php echo $first;?>"><br>
    Last Name: <input type="text" name="last" value="<?php echo $last;?>"><br>
    Email: <input type="text" name="email" value="<?php echo $email;?>"><br>
    Address: <input type="text" name="add" value="<?php echo $add;?>"><br>
    <input type="submit">
    </form>
</body>
</html>
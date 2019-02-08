<?php
    require "db.php";
    $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="login.css" />
    <script src="main.js"></script>
</head>
<body>
<?php include 'header.php'?>
<a href="signup.php">Need to become part of the club click here!</a>

<form action="chlogin.php" method="GET">
    <div class="boxlogin">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="first" value="<?php echo $first;?>" required>

        <label for="psw"><b>Password</b></label>
        <input type="text" placeholder="Enter Password" name="pass" value="<?php echo $pass;?>"required>

        <label for="psw"><b>Identifier</b></label>
        <input type="text" placeholder="Enter Your unique" name="iden" value="<?php echo $iden;?>"required>

        <button type="submit">Login</button>
    </div>
</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Signup</title>
    <link rel="stylesheet" type="text/css"  href="login.css" />
</head>
<body>
    

<?php include 'header.php'?>

<form action="chsignup.php" method="GET">
    <div class="boxlogin">
        <label ><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="first" value="<?php echo $first;?>" required>

        <label ><b>LastName</b></label>
        <input type="text" placeholder="Enter LastName" name="first" value="<?php echo $last;?>" required>

        <label ><b>Password</b></label>
        <input type="text" placeholder="Enter Password" name="passw" value="<?php echo $passw;?>"required>

        <label ><b>Identifier</b></label>
        <input type="text" placeholder="Enter Your unique" name="iden" value="<?php echo $iden;?>"required>

        <button type="submit">Login</button>
    </div>
</form>
</body>
</html>
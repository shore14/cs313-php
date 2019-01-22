<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>j</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   Your name is: <?php  echo $_POST["name"] , " " , $_POST["last"];?><br> 
   Your email is: <?php echo $_POST["email"];?><br>
   Your major is: <?php echo $_POST["major"];?><br>
</body>
</html>
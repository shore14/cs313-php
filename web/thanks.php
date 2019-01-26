<?php
  $first = htmlspecialchars($_GET['first']);
  $last  = htmlspecialchars($_GET['last']);
  $email = htmlspecialchars($_GET['email']);
  $add = htmlspecialchars($_GET['add']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   <?php
        echo "Thanks $first $last for ordering"<br>;
        echo "We will send your Car to $add";
   ?>
</body>
</html>
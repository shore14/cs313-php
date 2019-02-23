<?php
  require 'db.php';
  $db = getdb();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>See nice things</title>
    <link rel="stylesheet" type="text/css"  href="feed.css"/>
</head>
<body>
    <div class="feedbox">
       <h1>Put nice things here!<h1> 
       <div class="items">

       </div>
       <form action="create.php" method="POST" class="insert-card">
           <input type="text" placeholder="title" name="title">
           <input type="text" placeholder="comment" name="body">
       </form>
    </div>
</body>
</html>
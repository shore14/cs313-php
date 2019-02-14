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
       <div class="input-box">
       <form class="insert-card">
           <input type="text" placeholder="title">
           <input type="text" placeholder="comment">
       </form>
       <div>
    </div>
</body>
</html>
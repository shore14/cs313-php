<?php
  require 'db.php';
  $db = getdb();

  $title = $_POST['title'];
  $body = $_POST['body'];

  $state = $db->prepare('INSERT INTO cards (title, body) 
                        VALUES (:title, :body)');
  $state->bindValue(':title', $title, PDO::PARAM_STR);
  $state->bindValue(':body', $body, PDO::PARAM_STR);
  $state->execute();

  header('Location: feed.php');
  
?>
<?php
  require 'db.php';
  $db = getdb();

  $title = $_POST['title'];
  $body = $_POST['body'];
  $type = $_POST['type'];
  $state = $db->prepare('INSERT INTO cards (title, body, type) 
                        VALUES (:title, :body, (SELECT id FROM types where type == :type))'); 
  $state->bindValue(':title', $title, PDO::PARAM_STR);
  $state->bindValue(':body', $body, PDO::PARAM_STR);
  $state->bindValue(':type', $type, PDO::PARAM_STR);
  $state->execute();

  header('Location: feed.php');
  
?>
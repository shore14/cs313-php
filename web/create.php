<?php
  require 'db.php';
  $db = getdb();

  $title = $_POST['title'];
  $body = $_POST['body'];
  $type = $_POST['type'];
  // $state = $db->prepare('INSERT INTO cards (title, body) 
  //                       VALUES (:title, :body)'); 
  $typeid = $db->prepare('SELECT id FROM types where type = :typ');
  $typeid->bindValue(':typ', $type, PDO::PARAM_STR);
  $typeid->execute();
  $id = $typeid->fetch(PDO::FETCH_ASSOC);

  $state = $db->prepare('INSERT INTO cards (title, body, type) 
                         VALUES (:title, :body, $id)'); 
  $state->bindValue(':title', $title, PDO::PARAM_STR);
  $state->bindValue(':body', $body, PDO::PARAM_STR);
  
  $state->execute();

  header('Location: feed.php');
  
?>
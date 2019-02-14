<?php
  require 'db.php';
  $db = getdb();

  $firstname = $_GET['first'];
  $passw = $_GET['passw'];
  $iden = $_GET['iden'];


  $statment = $db->prepare('SELECT firstname, pass, iden FROM people 
                            WHERE firstname = :firstname
                            AND   pass = :passw
                            AND   iden = :iden');
  $statment->bindValue(':firstname', $firstname, PDO::PARAM_STR);
  $statment->bindValue(':passw', $passw, PDO::PARAM_STR);
  $statment->bindValue(':iden', $iden, PDO::PARAM_STR);
  $statment->execute();
  $rows = $statment->fetch(PDO::FETCH_ASSOC);

  
    if($statment->rowCount() > 0) {
      header('Location:feed.php');
    }
    else {
        echo "Wrong info";
        alert("Wrong info");
        header('Location:login.php');
    }

?>
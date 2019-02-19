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
      header('Location:login.php');
      echo "alert('wrong info')";
      // echo "<script type='text/javascript'>alert(\"Wrong Information\")</script>";
        // include("login.php");
        
        // header('Location:login.php');
        // echo "<script type='text/javascript'>alert(\"Wrong Username or Password\");</script>";
    }

?>
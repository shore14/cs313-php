<?php
  require 'db.php';
  $db = getdb();

  $firstname = $_GET['first'];
  $lastname = $_GET['last'];
  $passw = $_GET['passw'];
  $iden = $_GET['iden'];
 
  $checkExisting = $db->prepare('SELECT firstname, iden
                                 FROM people 
                                 WHERE firstname = :uname
                                 AND   iden = :ciden');

  $checkExisting->bindValue(':uname', $firstname, PDO::PARAM_STR);
  $checkExisting->bindValue(':ciden', $iden, PDO::PARAM_STR);
  $checkExisting->execute();
  // $exising = $checkExisting->fetchAll(PDO::FETCH_ASSOC);
  if($checkExisting->rowCount() > 0)
  {
    echo "<script type='text/javascript'>alert(\"Identifier already taken\")</script>";
    include("signup.php");
  }
  else
  {
     $statment = $db->prepare('INSERT INTO people (firstname, lastname, pass, iden) 
                            VALUES(:firstname, :lastname, :passw, :iden)');
     $statment->bindValue(':firstname', $firstname, PDO::PARAM_STR);
     $statment->bindValue(':lastname', $lastname, PDO::PARAM_STR);
     $statment->bindValue(':passw', $passw, PDO::PARAM_STR);
     $statment->bindValue(':iden', $iden, PDO::PARAM_STR);
     $statment->execute();
  }
  //$rows = $statment->fetchAll(PDO::FETCH_ASSOC);
  // header('Location:signup.php');
  //  foreach($db->query('select * from people') as $row) {
  //     echo $row['id'] . " " . $row['firstname'] . " " . $row['pass'] . " " . $row['iden'] . '<br><br>';
  // }
  

?>
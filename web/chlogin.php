<?php
  require ('db.php');
  $db = get_db();

  $first = $_GET['first'];
  $passw = $_GET['passw'];
  $iden = $_GET['iden'];
  echo $first;
  echo $passw;
  echo $iden;

  $statment = $db->prepare("SELECT * FROM people WHERE first=:first AND passw=:passw");
  $statment = bindValue(':first', $first, PDO::PARAM_STR);
  $statment = bindValue(':passw', $passw, PDO::PARAM_STR);
  $statment = bindValue(':iden', $iden, PDO::PARAM_STR);
  $statment->execute();
//  $rows = $statment->fetchAll(PDO::FETCH_ASSOC);
  while ($rows = $statment->fetch(PDO::FETCH_ASSOC)){
      echo $rows['first'];
  }
//    if($rows['first'] != '') {
//        echo "Thanks for login in";
//    }
//    else {
//        echo "Wrong info";
//    }

?>
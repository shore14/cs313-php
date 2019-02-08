<?php
  require 'db.php';
  $db = get_db();

  $first = $_GET['first'];
  $pass = $_GET['pass'];
  $iden = $_GET['iden'];

  $statment = $db->prepare('SELECT * FROM people WHERE first=:first AND pass=:pass AND iden=:iden');
  $statment = bindValue(':first', $first, PDO::PARAM_STR);
  $statment = bindValue(':pass', $pass, PDO::PARAM_STR);
  $statment = bindValue(':iden', $iden, PDO::PARAM_STR);
  $statment->execute();
  $rows = $statment->fetchAll(PDO::FETCH_ASSOC);

   echo $rows['first'];
//    if($rows['first'] != '') {
//        echo "Thanks for login in";
//    }
//    else {
//        echo "Wrong info";
//    }

?>
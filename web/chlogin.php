<?php
  require 'db.php';
  $db = getdb();

  $firstname = $_GET['first'];
  $passw = $_GET['passw'];
  $iden = $_GET['iden'];
 // echo $first;
  //echo $passw;
  //echo $iden;

   foreach($db->query('select * from people') as $row) {
         echo $row['firstname'] . " " . $row['pass'] . ":" . $row['iden'] . '<br>';
     }

  $statment = $db->prepare('SELECT firstname FROM people WHERE firstname = :firstname');
 // $statment = bindValue(':first', $first, PDO::PARAM_STR);
 // $statment = bindValue(':passw', $passw, PDO::PARAM_STR);
  $statment->bindValue(':firstname', $firstname, PDO::PARAM_STR);
  $statment->execute();
  $rows = $statment->fetchAll(PDO::FETCH_ASSOC);


  
  // while ($rows = $statment->fetch(PDO::FETCH_ASSOC)){
  //     echo $rows['firstname'];
//  }
    if($rows['firstname'] != '') {
        echo "Thanks for login in";
    }
    else {
        echo "Wrong info";
    }

?>
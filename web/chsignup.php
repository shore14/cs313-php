<?php
  require 'db.php';
  $db = getdb();

  $firstname = $_GET['first'];
  $lastname = $_GET['last'];
  $passw = $_GET['passw'];
  $iden = $_GET['iden'];
 

  $statment = $db->prepare('INSERT INTO people (firstname, lastname, pass, iden) 
                            VALUES(:firstname, :lastname, :passw, ;iden)');
  $statment->bindValue(':firstname', $firstname, PDO::PARAM_STR);
  $statment->bindValue(':lastname', $lastname, PDO::PARAM_STR);
  $statment->bindValue(':passw', $passw, PDO::PARAM_STR);
  $statment->bindValue(':iden', $iden, PDO::PARAM_STR);
//   $statment->execute();
  //$rows = $statment->fetchAll(PDO::FETCH_ASSOC);

//   foreach($db->query('select * from scriptures') as $row) {
//      echo $row['id'] . " " . $row['firstname'] . " " . $row['pass'] . " " . $row['iden'] . '<br><br>';
//  }
  

    // if($statment->rowCount() > 0) {
    //     echo "Thanks for login in";
    // }
    // else {
    //     echo "Wrong info";
    // }

?>
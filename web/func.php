<?php
    session_start();
 ?>
    <?php
    $car = $_REQUEST["c"];

  function cars($c){
      if($c == 'lotus'){
          $_SESSION['lotus'] = 'lotus'
      }
      if($c == 'chaser'){
          $_SESSION['chaser'] = 'chaser'
      }
      if($c == 'lambo'){
          $_SESSION['lambo'] = 'lambo'
      }
      if($c == 'ferrari'){
          $_SESSION['ferrari'] = 'ferrari'
      }
      if($c == 'mazz'){
          $_SESSION['mazz'] = 'mazz'
      }
      if($c == 'gtr'){
          $_SESSION['gtr'] = 'gtr'
      }
  }
  cars($car);
//  print_r($_SESSION);
?>
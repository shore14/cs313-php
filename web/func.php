<?php
session_start();
  function cars($car){
      if($car == 'lotus'){
          $_SESSION['lotus'] = 'lotus'
      }
      if($car == 'chaser'){
          $_SESSION['chaser'] = 'chaser'
      }
      if($car == 'lambo'){
          $_SESSION['lambo'] = 'lambo'
      }
      if($car == 'ferrari'){
          $_SESSION['ferrari'] = 'ferrari'
      }
      if($car == 'mazz'){
          $_SESSION['mazz'] = 'mazz'
      }
      if($car == 'gtr'){
          $_SESSION['gtr'] = 'gtr'
      }
  }
?>
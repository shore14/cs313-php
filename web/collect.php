<?php
session_start();
$chaser = $_POST['lotus'];

 echo $_SESSION["lotus"] = $_POST['lotus'];
 echo $_SESSION["chaser"] = $chaser;
 print_r($_SESSION);
?>
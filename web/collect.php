<?php
session_start();
$chaser = $_POST['chaser'];

 $_SESSION["lotus"] = $_POST['lotus'];
 $_SESSION["chaser"] = $chaser;
 print_r($_SESSION);
?>
<?php
session_start();
 echo $_SESSION["lotus"] = $_POST['lotus'];
 echo $_SESSION["chaser"] = $_POST['chaser'];
 print_r($_SESSION);
 session_unset();
?>
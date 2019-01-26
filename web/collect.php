<?php
session_start();
header("carForSale.php");
$car = $_POST['car'];

 $_SESSION["car"] = $car; 
 print_r($_SESSION);
// 


?>

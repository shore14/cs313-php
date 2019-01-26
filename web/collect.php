<?php
session_start();
$car = $_POST['car'];

 $_SESSION["car"] = $car; 
 print_r($_SESSION);
//  header("carForSale.php");
window.location.href = "carForSale.php";

?>

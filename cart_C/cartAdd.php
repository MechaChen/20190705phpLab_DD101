<?php 
session_start();
$psn = $_REQUEST["psn"];
if(isset($_SESSION["pname"][$psn]) === false){
	$_SESSION["pname"][$psn] = $_REQUEST["pname"];
	$_SESSION["price"][$psn] = $_REQUEST["price"];
	$_SESSION["qty"][$psn] = 1;	
}

header("location:cartShow.php");
 ?>
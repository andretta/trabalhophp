<?php 
session_start();
if (!isset($_SESSION["logado"])){
#if (FALSE){
	header("location: login.php");
	exit();
}

?>

<?php 
session_start();

if (!$_SESSION["login"]){
#if (FALSE){
	header("location: login.php");
	exit();
}

?>

<?php 
session_start();

#if (!$_SESSION["login"] && FALSE){
if (FALSE){
	header("location: login.php");
	exit();
}

?>

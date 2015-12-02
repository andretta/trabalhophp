<?php
require_once("BancoDeDados/classUsuarios.php");

$con=new usuarios(); //Instancia a class
$a = $_GET["ID"];
$rs = $con->seleciona($a);  //Seleciona
$resultado = mysql_fetch_array($rs);

?>
<?php include 'secure.php';?>
<?php include 'cabecalho.php';?>
<?php ################################ ?>
<?php 

		@$exclui = $con->apaga($a);
		header("location:listaUsuarios.php");

?>

</table>
<?php ################################ ?>
<?php include 'footer.php';?>
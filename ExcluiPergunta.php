<?php
require_once("BancoDeDados/classPerguntas.php");

$con=new perguntas(); //Instancia a class
$a = $_GET["ID"];
$rs = $con->seleciona($a);  //Seleciona
$resultado = mysql_fetch_array($rs);

?>
<?php include 'secure.php';?>
<?php include 'cabecalho.php';?>
<?php ################################ ?>
<?php 

		@$exclui = $con->apaga($a);
		header("location:listaPerguntas.php");

?>

</table>
<?php ################################ ?>
<?php include 'footer.php';?>
<?php
require_once("BancoDeDados/classPerguntas.php");

$con=new perguntas(); //Instancia a class
$rs = $con->seleciona();  //Seleciona

?>
<?php include 'secure.php';?>
<?php include 'cabecalho.php';?>
<?php ################################ ?>
<table class = table >
<form method="POST" >
	Cadastro de Perguntas <br><br>
	Nivel: <input type="text" name="nivel" required><br><br>
	Pergunta: <input type="text" name="pergunta" required><br><br>
	Resposta1: <input type="text" name="resposta1" required><br><br>
	Resposta2: <input type="text" name="resposta2" required><br><br>
	Resposta3: <input type="text" name="resposta3" required><br><br>
	Resposta4: <input type="text" name="resposta4" required><br><br>	
	RespostaCerta: <input type="text" name="respostaCerta" required><br><br>
	<input type="submit" name="submit" value="Salvar">
</form>
<?php 
	@$nivel = $_POST["nivel"];
	@$pergunta = $_POST["pergunta"];
	@$resposta1 = $_POST["resposta1"];
	@$resposta2 = $_POST["resposta2"];
	@$resposta3 = $_POST["resposta3"];
	@$resposta4 = $_POST["resposta4"];
	@$respostaCerta = $_POST["respostaCerta"];
	@$salvar = $_POST["submit"];
	if( $salvar == "Salvar"){
		echo @$resposta1;
		@$insere = $con->insercao($pergunta, $nivel, $resposta1,$resposta2,$resposta3,$resposta4,$respostaCerta);
		
		header("location:listaPerguntas.php");
		};
	
?>

</table>
<?php ################################ ?>
<?php include 'footer.php';?>

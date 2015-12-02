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
<table class = table >
<form method="POST" >
	Atualização de Cadastro de Perguntas<br><br>
	Nivel: <input type="text" name="nivel" value="<?php echo $resultado["nivel"];?>" required><br><br>
	Pergunta: <input type="text" name="pergunta" value="<?php echo $resultado["pergunta"];?>" required><br><br>
	Resposta1: <input type="text" name="resposta1" value="<?php echo $resultado["resposta1"];?>" required><br><br>	
	Resposta2: <input type="text" name="resposta2" value="<?php echo $resultado["resposta2"];?>" required><br><br>
	Resposta3: <input type="text" name="resposta3" value="<?php echo $resultado["resposta3"];?>" required><br><br>
	Resposta4: <input type="text" name="resposta4" value="<?php echo $resultado["resposta4"];?>" required><br><br>
	RespostaCerta: <input type="text" name="respostaCerta" value="<?php echo $resultado["respostaCerta"];?>" required><br><br>
	
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
		@$atualiza = $con->atualizar($a,$pergunta, $nivel, $resposta1,$resposta2,$resposta3,$resposta4,$respostaCerta);
		header("location:listaPerguntas.php");
	};
	
?>

</table>
<?php ################################ ?>
<?php include 'footer.php';?>
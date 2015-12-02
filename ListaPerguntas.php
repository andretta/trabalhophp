<?php
require_once("BancoDeDados/classPerguntas.php");

$con=new perguntas(); //Instancia a class
$rs = $con->seleciona();  //Seleciona

?>
<?php include 'secure.php';?>
<?php include 'cabecalho.php';?>
<?php ################################ ?>
<table class = table >
	<tr >
		<td ><b>Id</b></td>
		<td><b>Nivel</b></td>
		<td><b>Pergunta</b></td>
		<td ><b>Resposta 1</b></td>
		<td ><b>Resposta 2</b></td>	
		<td ><b>Resposta 3</b></td>
		<td ><b>Resposta 4</b></td>
	</tr>
	<?php
		while ($resultado = mysql_fetch_array($rs))
		{
			$id					= $resultado["id"];
			$nivel				= $resultado["nivel"];
			$pergunta			= $resultado["pergunta"];
			$resposta1			= $resultado["resposta1"];
			$resposta2			= $resultado["resposta2"];
			$resposta3			= $resultado["resposta3"];
			$resposta4			= $resultado["resposta4"];
	?>
	
	<tr>
		<td><?php echo $id ?></td>
		<td><?php echo $nivel ?></td>
		<td><?php echo $pergunta ?></td>	
		<td><?php echo $resposta1 ?></td>
		<td><?php echo $resposta2 ?></td>
		<td><?php echo $resposta3 ?></td>
		<td><?php echo $resposta4 ?></td>
			
		<td><a href='EditaPergunta.php?ID=<?=$resultado["id"];?>'> Editar </a></td>	
			
		<td><a href='ExcluiPergunta.php?ID=<?=$resultado["id"];?>'> Excluir </a> </td>
	<?php }	?>
	</tr>
</table>
<?php ################################ ?>
<?php include 'footer.php';?>

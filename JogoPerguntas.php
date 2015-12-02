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
		<td><b>Pergunta</b></td>
		<td ><b>Resposta 1</b></td>
		<td ><b>Resposta 2</b></td>	
		<td ><b>Resposta 3</b></td>
		<td ><b>Resposta 4</b></td>
	</tr>
	<?php while ($resultado = mysql_fetch_array($rs)) { $id = $resultado["id"]; ?>
	<tr>
		<td><?php echo $id ?></td>
		<td><?php echo $resultado["pergunta"] ?> </td>
		<?php for ($i = 1; $i <= 4; $i++) { ?>
			<td>
				<label><input  type="radio" value="<?php echo $i ?>" name="resposta<?php echo "-" . $id ?>">
				<?php echo $resultado["resposta" . $i] ?></label>
			</td>
		<?php } ?>
	<?php }	?>
	</tr>
</table>
<?php ################################ ?>
<?php include 'footer.php';?>
<?php
require_once("BancoDeDados/classUsuarios.php");

$con=new usuarios(); //Instancia a class
$rs = $con->seleciona();  //Seleciona

?>
<?php include 'secure.php';?>
<?php include 'cabecalho.php';?>
<?php ################################ ?>
<table class = table >
	<tr >
		<td ><b>Id</b></td>
		<td><b>Nome</b></td>

		<td ><b>Editar</b></td>	
		<td ><b>Excluir</b></td>
	</tr>
	<?php
		while ($resultado = mysql_fetch_array($rs))
		{
			$id				= $resultado["id"];
			$nome			= $resultado["nome"];
			$login			= $resultado["login"];
	?>
	
	<tr>
		<td><?php echo $id ?></td>
		<td><?php echo $nome ?></td>	
		<td><?php echo $login ?></td>
			
		<td><a href='EditaUsuario.php?ID=<?=$resultado["id"];?>'> Editar </a></td>	
			
		<td><a href='ExcluiUsuario.php?ID=<?=$resultado["id"];?>'> Excluir </a> </td>
	<?php }	?>
	</tr>
</table>
<?php ################################ ?>
<?php include 'footer.php';?>

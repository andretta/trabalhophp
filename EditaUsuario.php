<?php
require_once("BancoDeDados/classUsuarios.php");

$con=new usuarios(); //Instancia a class
$rs = $con->seleciona();  //Seleciona


?>
<?php include 'secure.php';?>
<?php include 'cabecalho.php';?>
<?php ################################ ?>
<table class = table >

Nome: <input type="text" name="nome" required><br><br>
Login: <input type="text" name="login" required><br><br>
Senha: <input type="text" name="senha" required><br><br>

@$btn =$_POST["submit"];
@$a = $_POST["login"];
@$b = $_POST["senha"];

<form name="Cadastro" method="POST" action="lista.php">
<input type="submit" name="submit" class="sb" value="Salvar" align ="left" />
</form>
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
	?>
	
	<tr>
		<td><?php echo $id ?></td>
		<td><?php echo $nome ?></td>	
			
		<td><a href='#'> Editar </a></td>		
		<td><a href='#'> Excluir </a> </td>
	<?php }	?>
	</tr>
</table>
<?php ################################ ?>
<?php include 'footer.php';?>
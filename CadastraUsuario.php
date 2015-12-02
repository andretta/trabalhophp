<?php
require_once("BancoDeDados/classUsuarios.php");

$con=new usuarios(); //Instancia a class
$rs = $con->seleciona();  //Seleciona

?>
<?php include 'secure.php';?>
<?php include 'cabecalho.php';?>
<?php ################################ ?>
<table class = table >
<form method="POST" >
	Cadastro de Usuário <br><br>
	Nome: <input type="text" name="nome" required><br><br>
	Login: <input type="text" name="login" required><br><br>
	Senha: <input type="text" name="senha" required><br><br>	
	<input type="submit" name="submit" value="Salvar">
</form>
<?php 
	@$nome = $_POST["nome"];
	@$login = $_POST["login"];
	@$senha = $_POST["senha"];
	@$salvar = $_POST["submit"];
	if( $salvar == "Salvar"){
		@$insere = $con->insercao($nome,$login,$senha);
		header("location:listaUsuarios.php");
		};
	
?>

</table>
<?php ################################ ?>
<?php include 'footer.php';?>
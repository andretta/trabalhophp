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
<table class = table >
<form method="POST" >
	Atualização de Cadastro <br><br>
	Nome: <input type="text" name="nome" value="<?php echo $resultado["nome"];?>" required><br><br>
	Login: <input type="text" name="login" value="<?php echo $resultado["login"];?>" required><br><br>
	Senha: <input type="text" name="senha" value="<?php echo $resultado["senha"];?>" required><br><br>	
	<input type="submit" name="submit" value="Salvar">
</form>
<?php 

	@$nome = $_POST["nome"];
	@$login = $_POST["login"];
	@$senha = $_POST["senha"];
	@$salvar = $_POST["submit"];
	if( $salvar == "Salvar"){
		@$atualiza = $con->atualizar($a,$nome,$login,$senha);
		header("location:listaUsuarios.php");
	};
	
?>

</table>
<?php ################################ ?>
<?php include 'footer.php';?>
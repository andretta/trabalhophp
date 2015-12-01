<?php
require_once("classUsuarios.php");

$con=new usuarios(); //Instancia a class

$rs = $con->seleciona();  //Seleciona

?>
<html>
<head>
	<title>Teste</title>
</head>
<body>
<table width="98%" border="1px" cellpadding="0" cellspacing="0" bordercolor="#000000" >
	<tr bgcolor="#FFCC99">
		<td align="center"><b>Id</b></td>
		<td><b>Nome</b></td>

		<td align="center"><b>Editar</b></td>	
		<td align="center"><b>Excluir</b></td>
	</tr>
								
	<?php
	while ($resultado = mysql_fetch_array($rs))
			{
				$id				= $resultado["id"];
				$nome			= $resultado["nome"];

	echo "
			<tr>
				<td align='center'>$id</td>
				<td>$nome</td>

				<td align='center'>
				<a href='#'>
				Editar </a></td>

				<td align='center'>
				<a href='#'>
				Excluir </a> </td>
		";					  
			}
	  ?>
	  </tr>
</table>
</body>
</html>
<?php
require_once("classConexaoMysql.php");
Class usuarios{
	
	//SELECT
    function seleciona(){
		$mySQL = new MySQL;
		$rs = $mySQL->executeQuery("SELECT * FROM usuarios;");
		@$mySQL->disconnect;
		return $rs;
    }
	
	//SELECT ID
    function selecionaid($id){
        $mySQL = new MySQL;
		$rs = $mySQL->executeQuery("SELECT * FROM usuarios where id=$id;");
		$mySQL->disconnect;
		return $rs;
    }
	
	//DELETE
    function apaga($id){
        $mySQL = new MySQL;
		$rs = $mySQL->executeQuery("delete from usuarios where id = $id");
		$mySQL->disconnect;
		return $rs;
    }
	
	function insercao($nome,$login,$senha){
        $mySQL = new MySQL;
		$sql = "Insert into usuarios (id,nome, login, senha) values (null,'$nome','$login','$senha')";
		echo $sql;
		$rs = $mySQL->executeQuery($sql);
		@$mySQL->disconnect;
		return $rs;
    }
	
	//UPDATE
    function atualizar($id, $nome,$login,$senha){
        $mySQL = new MySQL;
		$sql = "update usuarios set nome = '$nome', login = '$login', senha='$senha'  where id = $id";
		$rs = $mySQL->executeQuery($sql);
		//echo $sql;
		$mySQL->disconnect;
		return $rs;
    }
	
	function logar($login,$senha){
	    $mySQL = new MySQL;
		$sql = "select id, login, senha from usuarios where login = '$login' and senha = '$senha'";
		$rs = $mySQL->executeQuery($sql);
		//echo $sql;
		$mySQL->disconnect;
		return $rs;
    }
	
	function contar(){
	    $mySQL = new MySQL;
		$sql = "SELECT * FROM usuarios";
		$rs = $mySQL->contalinha($sql);
		//echo $sql;
		$mySQL->disconnect;
		return $rs;
	}
}
?>
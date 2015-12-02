<?php
require_once("classConexaoMysql.php");
Class perguntas{
	
	//SELECT
    function seleciona(){
		$mySQL = new MySQL;
		$rs = $mySQL->executeQuery("SELECT * FROM perguntas;");
		@$mySQL->disconnect;
		return $rs;
    }
	
	//SELECT ID
    function seleciona($id){
        $mySQL = new MySQL;
		$rs = $mySQL->executeQuery("SELECT * FROM perguntas where id=$id;");
		$mySQL->disconnect;
		return $rs;
    }
	
	//DELETE
    function apaga($id){
        $mySQL = new MySQL;
		$rs = $mySQL->executeQuery("delete from perguntas where id = $id");
		$mySQL->disconnect;
		return $rs;
    }
	
	function insercao($pergunta, $nivel, $resposta1,$resposta2,$resposta3,$resposta4,$respostaCerta){
        $mySQL = new MySQL;
		$sql = "Insert into perguntas (id,pergunta, nivel, resposta1,resposta2,resposta3,resposta4,respostaCerta) values (null,'$pergunta', '$nivel', '$resposta1','$resposta2','$resposta3','$resposta4','$respostaCerta')";
		echo $sql;
		$rs = $mySQL->executeQuery($sql);
		$mySQL->disconnect;
		return $rs;
    }
	
	//UPDATE
    function atualizar($id,$pergunta, $nivel, $resposta1,$resposta2,$resposta3,$resposta4,$respostaCerta){
        $mySQL = new MySQL;
		$sql = "update perguntas set pergunta = '$pergunta', nivel = '$nivel', resposta1='$resposta1',resposta2='$resposta2',resposta3='$resposta3',resposta4='$resposta4',respostaCerta='$respostaCerta'  where id = $id";
		$rs = $mySQL->executeQuery($sql);
		//echo $sql;
		$mySQL->disconnect;
		return $rs;
    }
	
	function contar(){
	    $mySQL = new MySQL;
		$sql = "SELECT * FROM perguntas";
		$rs = $mySQL->contalinha($sql);
		//echo $sql;
		$mySQL->disconnect;
		return $rs;
	}
}
?>
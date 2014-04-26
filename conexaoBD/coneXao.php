<?php 
	$database = "localhost";
	$dbname = "sgi";
	$usuario = "root";
	$dbsenha = "dcomt";
	
	$conexao = mysql_connect($database, $usuario, $dbsenha);
	if($conexao){
		if(mysql_select_db($dbname, $conexao)){ 
			print "";
		}else { print "Não foi possivel selecionar o Banco de Dados";}
	}else{print "Erro ao conectar o MySQL";}
?>
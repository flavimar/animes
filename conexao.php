<?php
	try{
		$conexao = new PDO("mysql:host=localhost;dbname=animes","root","");
	}catch(PDOException $e){
		echo "Falha na conexão com banco de dados:
		 ".$e->getMessage();
		die();
	}
?>

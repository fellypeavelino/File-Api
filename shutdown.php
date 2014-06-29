<?php
	
	
	function shutdown(){
		$pdo = new PDO("mysql:host=localhost;dbname=cake","root","");
		$pdo->query("insert into alunos (nome, matricula) values ('felip','08008414413')");
	}
	//$pdo->query("insert into alunos (nome, matricula) values ('felipe','08008414413')");
	try{
		register_shutdown_function("shutdown");
	}catch(Exception $e){
		die($e->getMessage() );
	}
?>
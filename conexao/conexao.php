<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "root";
	$dbname = "s_login1";
	
	//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if (!$conn){
	die("Falha na Conexão:  " .mysqli_connect_error());
}

//echo "Conectado com Sucesso ";
?>
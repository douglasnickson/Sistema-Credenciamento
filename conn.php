<?php 

header('Content-Type: text/html; charset=utf-8');

//Dados do Banco de Dados
$host = "localhost";
$usuario = "root";
$senha = "Douglas13.";
$banco = "inscricao_db";

//Efetuando a conexao
$conn =  mysqli_connect($host, $usuario, $senha);
$db = mysqli_select_db($conn, $banco);

//Charset do Banco
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn,'SET character_set_connection=utf8');
mysqli_query($conn,'SET character_set_client=utf8');
mysqli_query($conn,'SET character_set_results=utf8');

/*
header('Content-Type: text/html; charset=utf-8');

//Dados do Banco de Dados
$host = "10.16.32.118";
$usuario = "usr_cred_marta";
$senha = "W2K@pesquisapombal";
$banco = "pesquisapombal";

//Efetuando a conexao
$conn =  mysqli_connect($host, $usuario, $senha);
$db = mysqli_select_db($conn, $banco);

//Charset do Banco
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn,'SET character_set_connection=utf8');
mysqli_query($conn,'SET character_set_client=utf8');
mysqli_query($conn,'SET character_set_results=utf8');
*/
?>
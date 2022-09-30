<?php
session_start();
include_once("conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITTIZE_EMAIL);

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITTIZE_STRING);

$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITTIZE_STRING);

$result_usuario = "INSERT INTO teste (email, nome, senha, created) VALUES ('$email', '$nome', '$senha', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Seus dados foram enviados com sucesso / dentro de 24horas voce recebera um retorno</p>";
	header("Location: index.html");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Seus dados não foi enviados com sucesso</p>";
	header("Location:  index.html");
}
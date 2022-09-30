<?php
session_start();
include_once("conexao.php");

$CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$Processos = filter_input(INPUT_POST, 'Processos', FILTER_SANITIZE_STRING);



$result_usuario = "INSERT INTO plataforma (CPF, Processos, created) VALUES ('$CPF', '$Processos', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);



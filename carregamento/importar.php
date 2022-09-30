<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "csv";


$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$arquivo = $_FILES["file"]["tmp_name"];
$nome = $_FILES["file"]["name"];


$ext = explode(".",$nome);

$extensao = end($ext);

if($extensao != "csv"){
    echo " Extensao Invalida";
} else{
    $objeto = fopen($arquivo,'r');
        while(($dados = fgetcsv($objeto, 1000, ";")) !== FALSE)
        {
            $nome =utf8_encode($dados[0]);
            $sobrenome =utf8_encode($dados[1]);

            $result = "INSERT INTO aluno (nome, sobrenome) VALUES ('$nome', '$sobrenome')";
            $resultado_usuario = mysqli_query($conn, $result);

            if(($result) AND ($resultado_usuario->num_rows == 0)){
                $erro = true;
                $_SESSION['msg'] = "Este e-mail já está cadastrado";
            }

        }
        if($result){
            echo "Dados Inseridos com Sucesso";
        }else{
            echo "Dados não foram inseridos com sucesso";
        }
}

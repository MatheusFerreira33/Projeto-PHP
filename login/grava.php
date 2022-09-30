<?php

include "abrir_banco.php";


$nome = $_POST["txtnome"];
$email = $_POST["txtemail"];
$telefone = $_POST["txttelefone"];

$executa = "INSERT INTO alunos (nome, email, telefone,ativo) VALUES ('$nome','$email','$telefone',true)";

      
$query = $mysqli->query($executa);


echo "<fieldset>";
echo "<center><img src='checked.jpg' width='20%'>";
echo "<br><br><br>";
echo "<font color='red'>";
echo "<h1> Inclusão realizada com sucesso<br>";
echo "<br><br>";
echo "<a href ='consulta.php'>voltar</a></h1>";
echo "</font></center>";        
echo "</fieldset>";

?>
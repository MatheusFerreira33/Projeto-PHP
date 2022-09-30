<?php

include "abrir_banco.php";

$cod  = $_POST["txtcodigo"];
$nome = $_POST["txtnome"];
$email = $_POST["txtemail"];
$telefone = $_POST["txttelefone"];

$executa = "UPDATE alunos SET nome = '$nome', email = '$email', telefone='$telefone' WHERE codigo=$cod";
      
$query = $mysqli->query($executa);


echo "<fieldset>";
echo "<center><img src='checked.jpg' width='20%'>";
echo "<br><br><br>";
echo "<font color='red'>";
echo "<h1> Alteração realizada com sucesso<br>";
echo "<br><br>";
echo "<a href ='consulta.php'>voltar</a></h1>";
echo "</font></center>";        
echo "</fieldset>";

?>
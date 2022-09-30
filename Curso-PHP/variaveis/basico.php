<div class="titulo">Tipos Variaveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
vaR_Dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);// ele verifica se foi definida

unset($somaDosNumeros); // ele verifica se foi destruida 
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma String!";
echo '<br>' . $variavel;

// Nomes de Variavel 

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar!
// $6var = 'invalida';
// $%var7 = 'invalida';
//$var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);





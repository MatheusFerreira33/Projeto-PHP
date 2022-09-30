<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Brasil"  
];

$todososdados = $dados1 + $dados2;
print_r($todososdados);

echo '<br>' . is_array($todososdados); // is_array serve para saber se o comando e um array
echo '<br>' . count($todososdados); // cont serve para vc saber quantas chaves tem dentro do array

echo '<br>';

$indice = array_rand ($todososdados); // e pra vc saber de uma forma randomico
echo "$indice = $todososdados [$indice]";

echo '<br>';

echo "{$todososdados['idade']}"; // formas de chamar uma chave
echo "${todososdados['idade']}";

unset($todososdados["nome"]);

echo '<br>';
print_r($todososdados);

unset($todososdados);

echo '<br>';
var_dump($todososdados);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, ,4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares , $impares);
echo '<br>';
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);


<div class="titulo">Mapas</div>

<?php

$dados= array(
    "idade" => 25,
    "cor" => "vermelho",
    "peso" => 48.9
);

print_r($dados);

var_dump($dados[0]);
echo '<br>'. $dados["idade"];
echo '<br>'. $dados["cor"];
echo '<br>'. $dados["peso"];
echo '<br>' . $dados ["outra informação"]; // não vai mostrar erro ou mostra NULL

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "9",
    8 => "h"
);

print_r($lista);

$lista[] = 'i';
echo '<br>';
print_r($lista);

$lista ['vinte'] = 'j';
echo '<br>';
print_r($lista);







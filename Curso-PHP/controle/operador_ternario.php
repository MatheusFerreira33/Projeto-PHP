<div class="titulo">Operador Ternario</div>

<?php

$idade = 25;
$status; 

if($idade >= 18) { 
    $status = 'maior de idade';
} else {
    $status = 'menor de idade';
}
echo "$status <br>";



$idade = 13;
$status = $idade >=18 ? 'maior de idade' : 'menor de idade';
echo "$status <br>";




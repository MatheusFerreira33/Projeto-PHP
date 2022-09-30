<div class="titulo">Operações Usando IfElse</div>

<?php

$idade = 18;
if($idade < 18) {
    echo "Menor de idade = $idade anos <br>";
} elseif ($idade <= 65) {
    echo "Adulto = $idade anos  <br>";
} else {
    echo "Terceira idade = $idade anos!"; 
}

echo '<br>';

$x = 15;
$y = 23;

if ($x == $y) {
    echo "$x e $y são iguais";
} else echo "$x e $y são diferentes";

$teste1 = 5;
$teste2 = 5;

echo '<br>'. '<br>';
if ($teste1 == $teste2)
    echo "$teste1 e $teste2 são iguais";
elseif ($teste1 < $teste2)
    echo "$teste1 e menor que $teste2";
elseif ($teste1 > $teste2)
    echo "$teste1 e maior que $teste2";




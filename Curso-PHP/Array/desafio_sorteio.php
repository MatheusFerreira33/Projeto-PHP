<div class="titulo">Desafio Sorteio</div>

<?php

$times = ['São paulo', 'Milan', 'Boca Junior', 'Marchested United'];
$nomes = array_rand($times);
echo $times[$nomes];
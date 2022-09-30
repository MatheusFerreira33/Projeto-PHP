<div class="titulo">Array</div>

<?php // o array serve para amarzenar coleções dentro de variaveis 

$lista = array(1, 2, 3.4, "texto"); // aplicação do array 
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista); // outra forma de mostrar 

$lista[0] = 1234;
print_r($lista);

echo '<br>' . $lista[0]; // aqui e para 
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]);

$texto = 'Esse e um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; // cuidado!
echo '<br>' . mb_substr($texto, 10, 1);


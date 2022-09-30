<div class="titulo">Forech</div>

<?php

$array = [
     matheus => 'Domingo',
      pedro =>      'Segunda',
       jose =>     'Terça',
        gustavo =>    'Quarta',
        gabriel =>     'Quinta',
        moseis =>     'Sexta',
        felipa =>    'Sabado'
];

foreach ($array as $valor){
    echo "$valor <br>";
}

echo "<hr>";

foreach($array as $indice => $valor){ // esse indeice mostrar a chave da variavel 
    echo "$indice => $valor <br>";
}

echo "<hr>";

$array2 =[
    matheus => '11986587',
    pedro =>      '11989574',
     jose =>     '11989663',
      gustavo =>    '11987412',
      gabriel =>    '11998756'  

];

foreach($array2 as $indice => $valor){
    echo "$indice => $valor <br>";
}

echo "<hr>";

$matrix = [
    ['a','e','i','o','u'],
    
    ['b','c','d']
];

foreach($matrix as $linha){

    foreach($linha as $valor){
            echo "$valor ";
        }
    echo "<br>";
}

echo "<hr>";

$numeros =[1,2,3,4,5];
foreach ($numeros as &$dobrar){
    $dobrar += 5;
    echo "$dobrar <br>";
}
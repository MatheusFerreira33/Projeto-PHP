<div class="titulo">Arrays Multidimensionais</div>

<?php

$dados = ["cadastro" => $usuarios = ["nome" => "Matheus", "idade" => 18, "sexo" => "Masculino",],
         "disciplina" => $usuarios = ["discisplina" => "Informatica","semana" => "segunda", "horario" => "7h as 9:30"],];
         

echo ($dados ["cadastro"] ["nome"]); 

echo '<br> . <br>';

echo ($dados ["disciplina"] ["horario"]);

echo '<br>.<br>';
?>

<div class="titulo">Outros Exemplos </div>

<?php

$dados = [
    [
        "nome" => "Roberto",                    // isso aqui e outra forma de criar a estrutura 
        "idade" => 26,
        "Naturalidade" => "Bahia",
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "Nataralidade" => "Bahia",
    ],
];

print_r($dados);
echo '<br>' . $dados[0] ['idade'];          // outra forma de chamar alguma chave 
echo '<br>' . $dados[1]['idade'];

$dados [] = [
    "nome" => "florinda",
    "idade" => 30,                                  // essa parte aqui e para acrecentar uma informação 
    "naturalidade" => "Cidade do Mexico "
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados [2] ['idade'];

$dados [2] ["Vizinho"] = "chaves";              // essa parte aqui e para acrecentar uma informação dentro de um array 
echo '<br>';
print_r($dados [2]);

usent ($dados [1]);         // aqui estou apagando um array 
echo '<br>';
print_r($dados);

var_dump($dados [1]);




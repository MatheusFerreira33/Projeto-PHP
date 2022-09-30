<div class="titulo">Lição do Array </div>

<?php

$cidades = array(0, 'Guarulhos', 'Osasco', 'Mogi', 'Santos', 'Diadema');

print_r($cidades);
$cidades [4] = 'Barueri';

echo '<br>' . '<br>';

print_r($cidades);

echo '<br>' . '<br>';

echo $cidades[4];

echo '<br>'. '<br>';

$cidades[] = 'Americana';
print_r($cidades);

echo '<br>' . '<br>';

echo '<center>' . 'Parte 2 da Lição Cadastro' . '</center>';

echo '<br>'. '<br>';

$cadastro = array(0, 'nome' => 'Matheus', 'apelido' =>'Negão', 'telefone' => 119875624, 'email' => 'matheus.fsilva@gmail.com', 'cidades' => 'Guarulhos');
print_r($cadastro);

echo '<br>'.'<br>';

$cadastro ['nome'] = 'Ferreira';
$cadastro ['apelido'] = 'Negro';
print_r($cadastro);

echo '<br>' . '<br>';
$AUX = $cadastro['nome'];
echo $AUX;

echo  '<br>' . '<br>';
$AUX = $cadastro ['nome'] = 'Silva';
echo $AUX;

echo '<br>' . '<br>';

$AUX = 'vamo krl';

$cadastro ['nome'] = $AUX;
print_r($cadastro);

echo '<br>' . '<br>';

unset( $cadastro['apelido'] );
print_r($cadastro);



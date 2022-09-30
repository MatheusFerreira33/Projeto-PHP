<div class="titulo">Tipos String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

//concatenação

echo ("Nós também" . 'somos' . '<br>');
echo ("Número é " .  123);
echo '<br>', "Também aceito", "Virgulas";

echo '<br>';
echo "'teste' " . '"teste" ' . '\'teste\' ' . "\"teste\" " . "\\";echo '<br>';

print("<br>Tambem existe O função print");
print "<br>Tambem existe O função print";

// Algumas funções

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('Minimizado');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('Todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strelen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
echo '<br>' . str_replace('isso', 'aquilo', 'Troca isso');


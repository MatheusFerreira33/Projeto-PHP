<div class="titulo">Operadores Logicos</div>

<?php
echo "<p><strong> V ou F </strong></p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not

echo "<p><strong> Tabela Verdade 'AND' (E)</strong> </p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true AND true);
var_dump(true AND false);
var_dump(false AND true);
var_dump(false AND false);

echo "<p><strong> Tabela Verdade 'OR' (OU)</strong> </p><hr>";

var_dump(true || true);
var_dump(true || true);
var_dump(true || true);
var_dump(true || true);

var_dump(true or true);
var_dump(true or true);
var_dump(true or true);
var_dump(true or true);

echo "<p><strong> Tabela Verdade 'OR' (OU Exclusivo)</strong> </p><hr>";
var_dump(true xor true);
var_dump(true xor true);
var_dump(true xor true);
var_dump(true xor true);

var_dump(true != true);
var_dump(true != true);
var_dump(true != true);
var_dump(true != true);




?>

<style>
p{
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}

</style>

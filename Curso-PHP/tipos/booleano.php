<div class="titulo">Tipos Booleano</div>


<?php

echo true;
echo '<br>';
echo false;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

//fazer as regras de conversôes

echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool)0); // apenas zero e false
echo '<br>' . var_dump((bool)20);
echo '<br>' . var_dump((bool)-1);
echo '<br>' . var_dump((bool)0.0);
echo '<br>' . var_dump((bool)0.00000001);
echo '<br>' . var_dump((bool)""); //false
echo '<br>' . var_dump((bool)"0"); //false
echo '<br>' . var_dump((bool)" "); // todo resto e true
echo '<br>' . var_dump((bool)"00");
echo '<br>' . var_dump((bool)"false");
echo '<br>' . var_dump(!!"false");


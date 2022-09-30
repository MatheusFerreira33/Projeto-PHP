<div class="titulo">Desafio switch</div>

<form action= "#" method= "post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha"> km > Milha </option>
        <option value="milha-km"> milha > Km </option>
        <option value="metro-km"> metros > km </option>
        <option value="km-metro"> km > Metros </option>
        <option value="cel-fah"> Celsius > Fahrenheit</option>
        <option value="fah-cel"> Fahrenheit > Celsius</option>
    </select>
    <button> Calcular</button>
</form>


<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 100;
const FATOR_CEL_FAH = 1.8;

$param = $_POST ['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param km = $distancia Minhas";
         break;
    case 'milha-km':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param milhas = $distancia km";
         break;
    case 'metro-km':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param metros = $distancia km";
        break;
    case 'cel-fah':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}º Celsius = {$conversao}º Fahrenheit";
        break;
        case 'fah-cel':
            $conversao = ($param - 32) / FATOR_CEL_FAH;
            $mensagem = "{$param}º Fahrenheit = {$conversao}º Celsius";
            break;
    default:
        $mensagem = "Nenhum valor calculado!";
}

echo "<p>$mensagem</p>";


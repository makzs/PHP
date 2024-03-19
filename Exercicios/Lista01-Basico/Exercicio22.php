<form action="" method="GET">
    <label for="num">Informe um valor: </label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

// Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 27%

echo "Calculadora de 27% de desconto";

echo "<hr>";

$vlr1 = $_GET['num'];
$vintesete = ($vlr1 * 27) / 100;

echo "O valor original é igual a: " . $vlr1;
echo "<br>";
echo "O valor do desconto é igual a: " . $vintesete;
echo "<br>";
echo "O valor com 27% de desconto é igual a: " . $vlr1 - $vintesete;
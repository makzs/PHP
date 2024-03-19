<form action="" method="GET">
    <label for="num">Informe um valor: </label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

// Escreva um algoritmo que receba o valor de um produto e calcule umdesconto de 7%, 
// exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.

echo "Calculadora de 7% de desconto";

echo "<hr>";

$vlr1 = $_GET['num'];

$sete = ($vlr1 * 7) / 100;

echo "O valor original é igual a: " . $vlr1;
echo "<br>";
echo "O valor do desconto é igual a: " . $sete;
echo "<br>";
echo "O valor com 7% de desconto é igual a: " . $vlr1 - $sete;
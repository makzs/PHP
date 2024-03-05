<?php

// Escreva um algoritmo que receba o valor de um produto e calcule umdesconto de 7%, 
// exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.

echo "Calculadora de 7% de desconto";

echo "<hr>";

echo "Informe um valor: ";

$vlr1 = 238;
echo $vlr1;
echo "<br>";

$sete = ($vlr1 * 7) / 100;

echo "<hr>";

echo "O valor original é igual a: " . $vlr1;
echo "<br>";
echo "O valor do desconto é igual a: " . $sete;
echo "<br>";
echo "O valor com 7% de desconto é igual a: " . $vlr1 - $sete;

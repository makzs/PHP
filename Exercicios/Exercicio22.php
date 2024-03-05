<?php

// Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 27%

echo "Calculadora de 27% de desconto";

echo "<hr>";

echo "Informe um valor: ";

$vlr1 = 100;
echo $vlr1;
echo "<br>";

$vintesete = ($vlr1 * 27) / 100;

echo "<hr>";

echo "O valor original é igual a: " . $vlr1;
echo "<br>";
echo "O valor do desconto é igual a: " . $vintesete;
echo "<br>";
echo "O valor com 27% de desconto é igual a: " . $vlr1 - $vintesete;
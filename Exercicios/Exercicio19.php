<?php

//  Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 9%

echo "Calculadora de 9% de desconto";

echo "<hr>";

echo "Informe um valor: ";

$vlr1 = 457;
echo $vlr1;
echo "<br>";

$nove = ($vlr1 * 9) / 100;

echo "<hr>";

echo "O valor com 9% de desconto é igual a: " . $vlr1 - $nove;
<?php

// Faça um script que peça a temperatura em graus Fahrenheit, transforme e mostre a temperatura em graus Celsius. 
// C = (5 * (F-32) / 9).

echo "Conversor Fahrenheit para Celsius";

echo "<hr>";

echo "Informe o valor em Fahrenheit: ";

$Fahrenheit = 40;
echo $Fahrenheit;
echo "<br>";

echo "<hr>";

echo "O valor de " . $Fahrenheit . " fahrenheit em Celisus é de: " . number_format((5 * ($Fahrenheit - 32) / 9));
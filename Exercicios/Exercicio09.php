<?php

// Faça um script que peça a temperatura em graus Celsius, transforme emostre em graus Fahrenheit

echo "Conversor Celsius para Fahrenheit";

echo "<hr>";

echo "Informe o valor em Celsius: ";

$Celsius = 25;
echo $Celsius;
echo "<br>";

echo "<hr>";

echo "O valor de " . $Celsius . " Celisus em fahrenheit é de: " . number_format(($Celsius * 1.8) + 32);
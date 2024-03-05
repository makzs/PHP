<?php

//  Faça um script que peça 2 números inteiros e um número real. Calcule e mostre:
// a. O produto do dobro do primeiro com metade do segundo
// b. A soma do triplo do primeiro com o terceiro.
// c. O terceiro elevado ao cubo.

echo "<hr>";

echo "Informe o primeiro numero inteiro: ";

$int1 = 20;
echo $int1;
echo "<br>";

echo "Informe o segundo numero inteiro: ";

$int2 = 30;
echo $int2;
echo "<br>";

echo "Informe o primeiro numero real: ";

$real1 = 15.5;
echo $real1;
echo "<br>";

echo "<hr>";

echo "O produto do dobro do primeiro com metade do segundo: " . ($int1 * 2) * ($int2 / 2);

echo "<br>";

echo "A soma do triplo do primeiro com o terceiro: " . ($int1 * 3) + $real1;

echo "<br>";

echo "O terceiro elevado ao cubo: " . $real1 ** 3;
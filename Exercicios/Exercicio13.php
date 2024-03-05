<?php

// . Escreva um algoritmo que leia três números nas variáveis Val1, Val2 eVal3, 
// calcule sua média na variável media e exiba para o usuário o resultado

echo "<hr>";

echo "Informe o primeiro valor: ";

$Val1 = 13;
echo $Val1;
echo "<br>";

echo "Informe o segundo valor: ";

$Val2 = 21;
echo $Val2;
echo "<br>";

echo "Informe o terceiro valor: ";

$Val3 = 50;
echo $Val3;
echo "<br>";

$media = ($Val1 + $Val2 + $Val3) / 3;

echo "<hr>";

echo "A media dos três valores é de: " . $media;
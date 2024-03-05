<?php

// Escreva um algoritmo que calcule e apresente o volume de uma caixa retangular por meio da seguinte fórmula: 
// volume = comprimento xlargura x altura

echo "Calculadora de volume de uma caixa";

echo "<hr>";

echo "Informe o comprimento da caixa: ";

$comprimento = 20;
echo $comprimento;
echo "<br>";

echo "Informe a largura da caixa: ";

$largura = 30;
echo $largura;
echo "<br>";

echo "Informe a altura da caixa: ";

$altura = 50;
echo $altura;
echo "<br>";

$volume = $comprimento * $largura * $altura;

echo "<hr>";

echo "O volume dessa caixa é de: " . $volume;
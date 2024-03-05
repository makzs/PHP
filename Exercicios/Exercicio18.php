<?php

// Escreva um algoritmo que leia a altura e o peso de uma pessoa,calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário.

echo "Calculadora de IMC (indice de massa corporal";

echo "<hr>";

echo "Informe a altura da pessoa: ";

$altura = 1.60;
echo $altura;
echo "<br>";

echo "Informe o peso da pessoa: ";

$peso = 70;
echo $peso;
echo "<br>";

echo "<hr>";

echo "IMC calculado: " . number_format($peso / ($altura ** 2), 2);
<?php

// Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. 
// Calcule e mostre o total do seu salário no referido mês

echo "Calculadora de Salario Mensal";

echo "<hr>";

echo "Informe quanto voce ganha por hora: R$";

$slrHora = 50;
echo $slrHora;
echo "<br>";

echo "Informe quantas horas trabalhadas no mes: ";

$Horas = 90;
echo $Horas;
echo "<br>";

echo "<hr>";

echo "O salario mensal é de: R$" . $slrHora * $Horas;
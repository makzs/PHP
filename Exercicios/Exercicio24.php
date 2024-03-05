<?php

//  Escreva um algoritmo que leia 3 notas de um aluno e calcule a médiafinal deste aluno, 
// considerando que a média é ponderada, ou seja, opeso das notas são, respectivamente, 2, 3 e 5.

echo "Media Ponderada";

echo "<hr>";

echo " (peso 2) Informe a primeira nota: ";

$nota1 = 6;
echo $nota1;
echo "<br>";

echo " (peso 3) Informe a segunda nota: ";

$nota2 = 4;
echo $nota2;
echo "<br>";

echo " (peso 5) Informe a terceira nota nota: ";

$nota3 = 6;
echo $nota3;
echo "<br>";

$media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10;

echo "<hr>";

echo "A media ponderada das notas é igual a: " . $media;

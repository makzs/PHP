<?php

// Faça um script que peça 3 notas de um aluno e mostre sua média.

echo "<hr>";

echo "Media de Notas";

echo "<hr>";

echo "Informe a primeira nota: ";

$nota1 = 3;
echo $nota1;
echo "<br>";

echo "Informe a segunda nota: ";

$nota2 = 5;
echo $nota2;
echo "<br>";

echo "Informe a terceira nota: ";

$nota3 = 8;
echo $nota3;
echo "<br>";

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "<hr>";

echo "A media das notas é de: " . $media;
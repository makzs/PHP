<?php
// faça um programa que tenha um vetor de 20 numeros inteiros armazene os numeros pares no vetor PAR e os numeros impares no vetor Impar. no final imprima os tres vetores

$vetorNums = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
$vetorPar = array();
$vetorImpar = array();
$contPar = 0;
$contImpar = 0;

echo "Vetor original: <br>";
for ($i = 0; $i < 20; $i++) {
    echo "vetor " . $i . ": " . $vetorNums[$i] . "<br>";
}

for ($i = 0; $i < 20; $i++) {
    if ($vetorNums[$i] % 2 == 0) {
        $vetorPar[$contPar] = $vetorNums[$i];
        $contPar++;
    } else {
        $vetorImpar[$contImpar] = $vetorNums[$i];
        $contImpar++;
    }
}

echo "<hr>";

echo "Vetor Par: <br>";
for ($i = 0; $i < 10; $i++) {
    echo "vetor " . $i . ": " . $vetorPar[$i] . "<br>";
}

echo "<hr>";

echo "Vetor Impar: <br>";
for ($i = 0; $i < 10; $i++) {
    echo "vetor " . $i . ": " . $vetorImpar[$i] . "<br>";
}
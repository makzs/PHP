<?php
// faça um programa que leia um vetor de 10 numeros reais e mostre os na ordem inversa

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo "<p>Vetor original: </p>";

for ($i = 0; $i < 10; $i++) {
    echo " vetor $i : " . $numeros[$i] . "<br>";
}

echo "<p>Vetor invertido: </p>";

for ($i = 9; $i > 0; $i--) {
    echo " vetor $i : " . $numeros[$i] . "<br>";
}
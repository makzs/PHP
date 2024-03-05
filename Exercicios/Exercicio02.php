<?php

// Escreva um script que pede o raio de um círculo, e em seguida exiba operímetro e área do círculo. 
// Obs. procure por M_PI

echo "<hr>";

echo "Informe o raio de um circulo: ";

echo "<br>";

$raio = 16;
$perimetro = 2 * M_PI * $raio;
$area = M_PI * ($raio * $raio);

echo "O perimetro desse circulo é de: " . $perimetro;

echo "<br>";

echo "A area desse circulo é de: " . $area;

echo "<hr>";
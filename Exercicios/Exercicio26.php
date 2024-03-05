<?php 

// Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel
// e a quantidade de combustível (em litros) consumida para percorrê-la, 
// calcule e imprima o consumo médio decombustível. Fórmula: Consumo médio = Km / litros

echo "Consumo Medio de um Carro";

echo "<hr>";

echo "Informe a distancia total em km percorrida: ";

$distancia = 100;
echo $distancia;
echo "<br>";

echo "Informe a quantiade consumida em litros de combustivel: ";

$litros = 20;
echo $litros;
echo "<br>";

echo "<hr>";

echo "O consumo medio do carro que percorreu " . $distancia . "km utilizando " . $litros . "l é de " . $distancia/$litros . " litros por km";
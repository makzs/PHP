<form action="" method="GET">
    <label for="num1">Informe a distancia total em km percorrida: </label>
    <input type="text" name="km" id="km">

    <label for="num2">Informe a quantiade consumida em litros de combustivel: </label>
    <input type="text" name="combustivel" id="combustivel">

    <button type="submit">Enviar</button>
</form>


<?php

// Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel
// e a quantidade de combustível (em litros) consumida para percorrê-la, 
// calcule e imprima o consumo médio decombustível. Fórmula: Consumo médio = Km / litros

echo "Consumo Medio de um Carro";

echo "<hr>";

$distancia = $_GET['km'];
echo "A distancia informada foi de: " . $distancia;
echo "<br>";

$litros = $_GET['combustivel'];
echo "A quantidade de combustivel consumido informada foi de: " . $litros;
echo "<br>";

echo "<hr>";

echo "O consumo medio do carro que percorreu " . $distancia . "km utilizando " . $litros . "l é de " . $distancia / $litros . " litros por km";
<form action="" method="GET">
    <label for="num1">Informe o comprimento: </label>
    <input type="text" name="comprimento" id="comprimento">

    <label for="num2">Informe a largura: </label>
    <input type="text" name="largura" id="largura">

    <label for="num2">Informe a altura: </label>
    <input type="text" name="altura" id="altura">

    <button type="submit">Enviar</button>
</form>

<?php

// Escreva um algoritmo que calcule e apresente o volume de uma caixa retangular por meio da seguinte fórmula: 
// volume = comprimento x largura x altura

echo "Calculadora de volume de uma caixa";

echo "<hr>";

$comprimento = $_GET['comprimento'];
echo "O comprimento informado foi de: " . $comprimento;
echo "<br>";

$largura = $_GET['largura'];
echo "A largura informada foi de: " . $largura;
echo "<br>";

$altura = $_GET['altura'];
echo "A altura informada foi de: " . $altura;
echo "<br>";

$volume = $comprimento * $largura * $altura;

echo "<hr>";

echo "O volume dessa caixa é de: " . $volume;
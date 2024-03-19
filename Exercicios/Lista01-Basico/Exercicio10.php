<form action="" method="GET">
    <label for="num1">Informe o primeiro valor inteiro: </label>
    <input type="text" name="valor1" id="valor1">

    <label for="num2">Informe o segundo valor inteiro: </label>
    <input type="text" name="valor2" id="valor2">

    <label for="num2">Informe o primeiro numero real: </label>
    <input type="text" name="valor3" id="valor3">

    <button type="submit">Enviar</button>
</form>

<?php

//  Faça um script que peça 2 números inteiros e um número real. Calcule e mostre:
// a. O produto do dobro do primeiro com metade do segundo
// b. A soma do triplo do primeiro com o terceiro.
// c. O terceiro elevado ao cubo.

echo "<hr>";

$int1 = $_GET['valor1'];
echo "O primeiro valor é: " . $int1;
echo "<br>";

$int2 = $_GET['valor2'];
echo "O segundo valor é: " . $int2;
echo "<br>";

$real1 = $_GET['valor3'];
echo "O terceiro valor é: " . $real1;
echo "<br>";

echo "<hr>";

echo "O produto do dobro do primeiro com metade do segundo: " . ($int1 * 2) * ($int2 / 2);

echo "<br>";

echo "A soma do triplo do primeiro com o terceiro: " . ($int1 * 3) + $real1;

echo "<br>";

echo "O terceiro elevado ao cubo: " . $real1 ** 3;
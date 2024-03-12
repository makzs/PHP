<form action="" method="GET">
    <label for="num1">Informe o primeiro valor: </label>
    <input type="text" name="num1" id="num1">

    <label for="num2">Informe o segundo valor: </label>
    <input type="text" name="num2" id="num2">

    <button type="submit">Enviar</button>
</form>


<?php

// Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados e mostre o resultado.

echo "<hr>";

$num1 = $_GET['num1'];
echo "O primeiro valor informado foi: " . $num1;
echo "<br>";

$num2 = $_GET['num2'];
echo "O primeiro valor informado foi: " . $num2;
echo "<br>";

echo "<hr>";

echo "A soma dos quadrados dos valores é de: " . ($num1 ** 2) + ($num2 ** 2);
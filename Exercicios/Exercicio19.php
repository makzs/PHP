<form action="" method="GET">
    <label for="num">Informe um valor: </label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>


<?php

//  Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 9%

echo "Calculadora de 9% de desconto";

echo "<hr>";

$vlr1 = $_GET['num'];
echo "O valor informado foi de: " . $vlr1;
echo "<br>";

$nove = ($vlr1 * 9) / 100;

echo "<hr>";

echo "O valor com 9% de desconto é igual a: " . $vlr1 - $nove;
<form action="" method="GET">
    <label for="num1">Informe o primeiro comprimento do trapezio: </label>
    <input type="text" name="comprimento1" id="comprimento1">

    <label for="num2">Informe o segundo comprimento do trapezio: </label>
    <input type="text" name="comprimento2" id="comprimento2">

    <label for="num2">Informe a altura do trapezio: </label>
    <input type="text" name="altura" id="altura">

    <button type="submit">Enviar</button>
</form>

<?php

// Escreva um algoritmo que receba dois valores, calcule e apresente a área de um trapézio

echo "Calculadora de area de um trapezio";

echo "<hr>";

$vlr1 = $_GET['comprimento1'];
echo "O primeiro comprimento informado foi de: " . $vlr1;
echo "<br>";

$vlr2 = $_GET['comprimento2'];
echo "O segundo comprimento informado foi de: " . $vlr2;
echo "<br>";

$h = $_GET['altura'];
echo "A altura informada foi de: " . $h;
echo "<br>";

$area = ($vlr1 + $vlr2) * $h / 2;

echo "<hr>";

echo "A area do trapezio é de: " . $area;

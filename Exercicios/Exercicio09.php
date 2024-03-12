<form action="" method="GET">
    <label for="num">Informe o valor em Celsius: </label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

// Faça um script que peça a temperatura em graus Celsius, transforme emostre em graus Fahrenheit

echo "Conversor Celsius para Fahrenheit";

echo "<hr>";

$Celsius = $_GET['num'];
echo "O valor informado é " . $Celsius;
echo "<br>";

echo "<hr>";

echo "O valor de " . $Celsius . " Celisus em fahrenheit é de: " . number_format(($Celsius * 1.8) + 32);
<form action="" method="GET">
    <label for="num">Informe o valor em Fahrenheit: </label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

// Faça um script que peça a temperatura em graus Fahrenheit, transforme e mostre a temperatura em graus Celsius. 
// C = (5 * (F-32) / 9).

echo "Conversor Fahrenheit para Celsius";

echo "<hr>";

$Fahrenheit = $_GET['num'];
echo "O valor informado é " . $Fahrenheit;
echo "<br>";

echo "<hr>";

echo "O valor de " . $Fahrenheit . " fahrenheit em Celisus é de: " . number_format((5 * ($Fahrenheit - 32) / 9));
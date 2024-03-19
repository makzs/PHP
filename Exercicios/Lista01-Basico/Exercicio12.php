<form action="" method="GET">
    <label for="num1">Informe o primeiro valor: </label>
    <input type="text" name="num1" id="num1">

    <label for="num2">Informe o segundo valor: </label>
    <input type="text" name="num2" id="num2">

    <button type="submit">Enviar</button>
</form>

<?php

// Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.

echo "<hr>";

$num1 = $_GET['num1'];

echo "O primeiro valor é " . $num1;
echo "<br>";

$num2 = $_GET['num2'];

echo "O segundo valor é " . $num2;
echo "<br>";

echo "<hr>";

echo "A soma dos dois numeros multiplicado pelo primeiro numero é de: " . ($num1 + $num2) * $num1;
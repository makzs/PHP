<form action="" method="GET">
    <label for="num1">Informe o primeiro valor: </label>
    <input type="text" name="num1" id="num1">

    <label for="num2">Informe o segundo valor: </label>
    <input type="text" name="num2" id="num2">

    <button type="submit">Enviar</button>
</form>

<?php

// Faça um Programa que peça dois números e imprima o maior deles

echo "<hr>";

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

if ($num1 > $num2) {
    echo "O maior numero é " . $num1;
    echo "<br>";
} else {
    echo "O maior numero é " . $num2;
    echo "<br>";
}

echo "<hr>";
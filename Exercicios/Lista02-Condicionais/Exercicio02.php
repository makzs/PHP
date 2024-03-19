<form action="" method="GET">
    <label for="num1">Informe algum valor: </label>
    <input type="text" name="num1" id="num1">

    <button type="submit">Enviar</button>
</form>

<?php

// Faça um Programa que peça um valor e mostre na tela se o valor é positivo ounegativo

echo "<hr>";

$num1 = $_GET['num1'];

if ($num1 > 0) {
    echo "O numero " . $num1 . " é positivo!";
    echo "<br>";
} else if ($num1 == 0) {
    echo "O numero " . $num1 . " é zero!";
    echo "<br>";
} else {
    echo "O numero " . $num1 . " é negativo!";
    echo "<br>";
}

echo "<hr>";

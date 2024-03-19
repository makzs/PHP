<form action="" method="GET">
    <label for="num1">Informe o primeiro valor: </label>
    <input type="text" name="num1" id="num1">

    <label for="num2">Informe o segundo valor: </label>
    <input type="text" name="num2" id="num2">

    <label for="num3">Informe o segundo valor: </label>
    <input type="text" name="num3" id="num3">

    <button type="submit">Enviar</button>
</form>

<?php

// Faça um Programa que leia três números e mostre o maior e o menor deles

echo "<hr>";

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

if ($num1 > $num2 && $num1 > $num3) {
    echo "O maior numero é " . $num1;
    echo "<br>";
} else if (($num2 > $num1) && ($num2 > $num3)) {
    echo "O maior numero é " . $num2;
    echo "<br>";
} else {
    echo "O maior numero é " . $num3;
    echo "<br>";
}

echo "<hr>";

if ($num1 < $num2 && $num1 < $num3) {
    echo "O menor numero é " . $num1;
    echo "<br>";
} else if (($num2 < $num1) && ($num2 < $num3)) {
    echo "O menor numero é " . $num2;
    echo "<br>";
} else {
    echo "O menor numero é " . $num3;
    echo "<br>";
}

echo "<hr>";
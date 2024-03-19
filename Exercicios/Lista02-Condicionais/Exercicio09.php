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

// Faça um Programa que leia três números e mostre-os em ordem decrescente

echo "<hr>";

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

if ($num1 > $num2 && $num1 > $num3) {
    $maior = $num1;
} else if (($num2 > $num1) && ($num2 > $num3)) {
    $maior = $num2;
} else {
    $maior = $num3;
}


if ($num1 < $num2 && $num1 > $num3) {
    $medio = $num1;
} else if (($num2 > $num1) && ($num2 < $num3)) {
    $medio = $num2;
} else {
    $medio = $num3;
}


if ($num1 < $num2 && $num1 < $num3) {
    $menor = $num1;
} else if (($num2 < $num1) && ($num2 < $num3)) {
    $menor = $num2;
} else {
    $menor = $num3;
}

echo "Em ordem descresente eles ficam: " . $maior . "-" . $medio . "-"  . $menor;

echo "<hr>";
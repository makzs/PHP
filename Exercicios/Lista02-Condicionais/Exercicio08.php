<form action="" method="GET">
    <label for="valor1">Informe o preço do primeiro produto: </label>
    <input type="text" name="valor1" id="valor1">

    <label for="valor2">Informe o preço do segundo produto: </label>
    <input type="text" name="valor2" id="valor2">

    <label for="valor3">Informe o preço do terceiro produto: </label>
    <input type="text" name="valor3" id="valor3">

    <button type="submit">Enviar</button>
</form>

<?php

// Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar, sabendo que a decisão é sempre pelo mais barato.

echo "<hr>";

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$valor3 = $_GET['valor3'];

if ($valor1 < $valor2 && $valor1 < $valor3) {
    echo "O produto mais barato é o primeiro com o custo de: R$" . number_format($valor1, 2);
    echo "<br>";
} else if (($valor2 < $valor1) && ($valor2 < $valor3)) {
    echo "O produto mais barato é o segundo com o custo de: R$" . number_format($valor2, 2);
    echo "<br>";
} else {
    echo "O produto mais barato é o terceiro com o custo de: R$" . number_format($valor3, 2);
    echo "<br>";
}

echo "<hr>";
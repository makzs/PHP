<form action="" method="GET">
    <label for="vlr1">Informe o primeiro valor: </label>
    <input type="text" name="vlr1" id="vlr1">

    <label for="vlr2">Informe o segundo valor: </label>
    <input type="text" name="vlr2" id="vlr2">

    <button type="submit">Enviar</button>
</form>

<?php
// escreva um programa que receba dois valores inteiros e imprima na tela os valores inteiros compreendidos no intervalo entre eles
echo "<hr>";

$vlr1 = $_GET['vlr1'];
$vlr2 = $_GET['vlr2'];

for ($vlr1; $vlr1 < $vlr2 - 1; $vlr1++) {
    echo $vlr1 + 1 . " - ";
}
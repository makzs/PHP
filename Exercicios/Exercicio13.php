<form action="" method="GET">
    <label for="num1">Informe o primeiro valor: </label>
    <input type="text" name="Val1" id="Val1">

    <label for="num2">Informe o segundo valor: </label>
    <input type="text" name="Val2" id="Val2">

    <label for="num2">Informe o terceiro valor: </label>
    <input type="text" name="Val3" id="Val3">

    <button type="submit">Enviar</button>
</form>

<?php

// . Escreva um algoritmo que leia três números nas variáveis Val1, Val2 eVal3, 
// calcule sua média na variável media e exiba para o usuário o resultado

echo "<hr>";



$Val1 = $_GET['Val1'];
echo "O valor informado foi: " . $Val1;
echo "<br>";



$Val2 = $_GET['Val2'];
echo "O valor informado foi: " . $Val2;
echo "<br>";



$Val3 = $_GET['Val3'];
echo "O valor informado foi: " . $Val3;
echo "<br>";

$media = ($Val1 + $Val2 + $Val3) / 3;

echo "<hr>";

echo "A media dos três valores é de: " . $media;
<form action="" method="GET">
    <label for="num1"> (peso 2) Informe a primeira nota: </label>
    <input type="text" name="nota1" id="nota1">

    <label for="num2"> (peso 3) Informe a segunda nota: </label>
    <input type="text" name="nota2" id="nota2">

    <label for="num2"> (peso 5) Informe a terceira nota: </label>
    <input type="text" name="nota3" id="nota3">

    <button type="submit">Enviar</button>
</form>

<?php

//  Escreva um algoritmo que leia 3 notas de um aluno e calcule a médiafinal deste aluno, 
// considerando que a média é ponderada, ou seja, opeso das notas são, respectivamente, 2, 3 e 5.

echo "Media Ponderada";

echo "<hr>";

$nota1 = $_GET['nota1'];
echo "A primeira nota informada foi de: " . $nota1;
echo "<br>";

$nota2 = $_GET['nota2'];
echo "A primeira nota informada foi de: " . $nota2;
echo "<br>";

$nota3 = $_GET['nota3'];
echo "A primeira nota informada foi de: " . $nota3;
echo "<br>";

$media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10;

echo "<hr>";

echo "A media ponderada das notas é igual a: " . $media;
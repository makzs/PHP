<form action="" method="GET">
    <label for="num1">Informe a primeira nota: </label>
    <input type="text" name="nota1" id="nota1">

    <label for="num2">Informe a segunda nota: </label>
    <input type="text" name="nota2" id="nota2">

    <label for="num2">Informe a terceira nota: </label>
    <input type="text" name="nota3" id="nota3">

    <button type="submit">Enviar</button>
</form>

<?php

// Faça um script que peça 3 notas de um aluno e mostre sua média.

echo "<hr>";

echo "Media de Notas";

echo "<hr>";

echo "Informe a primeira nota: ";

$nota1 = $_GET['nota1'];
echo "A primeira nota é " . $nota1;
echo "<br>";

echo "Informe a segunda nota: ";

$nota2 = $_GET['nota2'];
echo "A segunda nota é " . $nota2;
echo "<br>";

echo "Informe a terceira nota: ";

$nota3 = $_GET['nota3'];
echo "A terceira nota é " . $nota3;
echo "<br>";

$media = number_format(($nota1 + $nota2 + $nota3) / 3);

echo "<hr>";

echo "A media das notas é de: " . $media;
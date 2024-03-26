<form action="" method="GET">
    <label for="nota1">Informe o valor da primeira nota: </label>
    <input type="text" name="nota1" id="nota1">

    <label for="nota2">Informe o valor da segunda nota: </label>
    <input type="text" name="nota2" id="nota2">

    <label for="nota3">Informe o valor da terceira nota: </label>
    <input type="text" name="nota3" id="nota3">

    <label for="nota4">Informe o valor da quarta nota: </label>
    <input type="text" name="nota4" id="nota4">

    <button type="submit">Enviar</button>
</form>

<?php
// faça um programa que receba o valor de 4 notas e calcule a media entre elas

$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$nota4 = $_GET['nota4'];

echo "<hr>";

$notas = array($nota1, $nota2, $nota3, $nota4);

echo "Dadas as notas: ";
for ($i = 0; $i < 4; $i++) {
    echo "<br>nota " . $i + 1 . ": " . $notas[$i];
}

echo "<hr>";
echo "<br>A media das notas é igual a: " . ($nota1 + $nota2 + $nota3 + $nota4) / 4;
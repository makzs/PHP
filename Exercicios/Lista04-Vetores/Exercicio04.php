<form action="" method="GET">
    <label for="caracter1">Informe o primeiro caracter: </label>
    <input type="text" name="caracter1" id="caracter1">
    <br>
    <label for="caracter2">Informe o segundo caracter: </label>
    <input type="text" name="caracter2" id="caracter2">
    <br>
    <label for="caracter3">Informe o terceiro caracter: </label>
    <input type="text" name="caracter3" id="caracter3">
    <br>
    <label for="caracter4">Informe o quarto caracter: </label>
    <input type="text" name="caracter4" id="caracter4">
    <br>
    <label for="caracter5">Informe o quinto caracter: </label>
    <input type="text" name="caracter5" id="caracter5">
    <br>
    <label for="caracter6">Informe o sexto caracter: </label>
    <input type="text" name="caracter6" id="caracter6">
    <br>
    <label for="caracter7">Informe o setimo caracter: </label>
    <input type="text" name="caracter7" id="caracter7">
    <br>
    <label for="caracter8">Informe o oitavo caracter: </label>
    <input type="text" name="caracter8" id="caracter8">
    <br>
    <label for="caracter9">Informe o nono caracter: </label>
    <input type="text" name="caracter9" id="caracter9">
    <br>
    <label for="caracter10">Informe o decimo caracter: </label>
    <input type="text" name="caracter10" id="caracter10">
    <br>

    <button type="submit">Enviar</button>
</form>

<?php
// faça um programa que leia um vetor de 10 caracteres e diga quantas consoantes foram lidas, imprima as consoantes

$caracter1 = $_GET['caracter1'];
$caracter2 = $_GET['caracter2'];
$caracter3 = $_GET['caracter3'];
$caracter4 = $_GET['caracter4'];
$caracter5 = $_GET['caracter5'];
$caracter6 = $_GET['caracter6'];
$caracter7 = $_GET['caracter7'];
$caracter8 = $_GET['caracter8'];
$caracter9 = $_GET['caracter9'];
$caracter10 = $_GET['caracter10'];
$contVogais = 0;
$contConso = 0;

$caracteres = array($caracter1, $caracter2, $caracter3, $caracter4, $caracter5, $caracter6, $caracter7, $caracter8, $caracter9, $caracter10);

for ($i = 0; $i < 10; $i++) {
    switch ($caracteres[$i]) {
        case ('a'):
            $contVogais++;
            break;
        case ('e'):
            $contVogais++;
            break;
        case ('i'):
            $contVogais++;
            break;
        case ('o'):
            $contVogais++;
            break;
        case ('u'):
            $contVogais++;
            break;
        default:
            $contConso++;
            break;
    }
}

echo "O numero de vogais lidas foi de: " . $contVogais;
echo "<br>O numero de consoantes lidas foi de: " . $contConso;
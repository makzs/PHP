<form action="" method="GET">
    <label for="num1">Informe a altura: </label>
    <input type="text" name="altura" id="altura">

    <label for="num2">Informe o peso: </label>
    <input type="text" name="peso" id="peso">

    <button type="submit">Enviar</button>
</form>

<?php

// Escreva um algoritmo que leia a altura e o peso de uma pessoa,calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário.

echo "Calculadora de IMC (indice de massa corporal)";

echo "<hr>";

$altura = $_GET['altura'];
echo "A altura informada foi de: " . $altura;
echo "<br>";

$peso = $_GET['peso'];;
echo "O peso informado foi de: " . $peso;
echo "<br>";

echo "<hr>";

echo "IMC calculado: " . number_format($peso / ($altura ** 2), 2);
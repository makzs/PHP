<form action="" method="GET">
    <label for="num1">Informe quanto voce ganha por hora: R$</label>
    <input type="text" name="slrHora" id="slrHora">

    <label for="num2">Informe quantas horas trabalhadas no mes: </label>
    <input type="text" name="Horas" id="Horas">

    <button type="submit">Enviar</button>
</form>

<?php

// Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. 
// Calcule e mostre o total do seu salário no referido mês

echo "Calculadora de Salario Mensal";

echo "<hr>";

$slrHora = $_GET['slrHora'];
echo "O salario informado  é " . $slrHora;
echo "<br>";

$Horas = $_GET['Horas'];
echo "As horas informada  é " . $Horas;
echo "<br>";

echo "<hr>";

echo "O salario mensal é de: R$" . $slrHora * $Horas;
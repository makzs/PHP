<form action="" method="GET">
    <label for="num">Informe um valor: </label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

// Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor

echo "<hr>";

echo "Informe um valor: ";

$num1 = $_GET['num'];
echo "O valor informado foi de: " . $num1;
echo "<br>";

$cinco = ($num1 * 5) / 100;

$cinquenta = ($num1 * 50) / 100;

echo "<hr>";

echo "5% desse valor é igual a: " . $cinco;
echo "<br>";
echo "50% desse valor é igual a: " . $cinquenta;
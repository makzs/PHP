<form action="" method="GET">
    <label for="num">Informe um valor: </label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

// Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 15% deste valor

echo "<hr>";

$num1 = $_GET['num'];
echo "O valor informado foi de: " . $num1;
echo "<br>";

$quinze = ($num1 * 15) / 100;

echo "<hr>";

echo "15% desse valor é igual a: " . $quinze;
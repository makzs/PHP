<form action="" method="GET">
    <label for="num1">Informe o primeiro valor: </label>
    <input type="text" name="num1" id="num1">

    <label for="num2">Informe o segundo valor: </label>
    <input type="text" name="num2" id="num2">

    <button type="submit">Enviar</button>
</form>

<?php

// faça um script que peça dois números e imprima a soma.

echo "<hr>";

$num1 = $_GET['num1'];

echo "O primeiro valor é " . $num1;
echo "<br>";

$num2 = $_GET['num2'];

echo "O segundo valor é " . $num2;
echo "<br>";

echo "A soma dos numeros é de: " . $num1 + $num2;
echo "<br>";

echo "<hr>";
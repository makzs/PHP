<form action="" method="GET">
    <label for="num">Informe um numero: </label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

// Faça um script que peça um número e então mostre a mensagem “O númeroinformado foi [número]”

echo "<hr>";

$numero = $_GET['num'];

echo "O numero informado foi " . $numero;

echo "<hr>";
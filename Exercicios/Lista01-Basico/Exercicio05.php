<form action="" method="GET">
    <label for="num">Informe o valor em metros: </label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

// Faça um script que converta metros para centímetros.

echo "Conversor de Metros para Centimetros";

echo "<hr>";

$metros = $_GET['num'];
echo "O valor informado é " . $metros;
echo "<br>";

echo "<hr>";

echo "O valor em centimetros: " . $metros * 100;
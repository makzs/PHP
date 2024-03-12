<form action="" method="GET">
    <label for="num">Informe a velocidade em metros por segundo: </label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

//Escreva um algoritmo que leia a velocidade de um objeto em m/s(metros por segundo), 
// calcule e exiba para o usuário a velocidade em km/h.

echo "Conversor metros por segundo para quilometros por hora";

echo "<hr>";

$metros = $_GET['num'];
echo "O valor informado foi: " . $metros;
echo "<br>";

echo "<hr>";

echo "A velocidade " . $metros . "m/s em km/h é de: " . $metros * 3.6 . "km/h";
<form action="" method="GET">
    <label for="num">Informe o valor de um lado do quadrado: </label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>


<?php

// Faça um script que calcule a área de um quadrado, em seguida mostre odobro desta área para o usuário.

echo "Area de um quadrado";

echo "<hr>";

$lado = $_GET['num'];
echo "O valor informado é " . $lado;
echo "<br>";

echo "<hr>";

echo "A area desse quadrado é de: " . $lado * $lado;
echo "<br>";
echo "O dobro da area desse quadrado é de: " .  ($lado * $lado) * 2;
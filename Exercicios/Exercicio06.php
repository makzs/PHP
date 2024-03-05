<?php

// Faça um script que calcule a área de um quadrado, em seguida mostre odobro desta área para o usuário.

echo "Area de um quadrado";

echo "<hr>";

echo "Informe o valor de um lado do quadrado: ";

$lado = 12;
echo $lado;
echo "<br>";

echo "<hr>";

echo "A area desse quadrado é de: " . $lado * $lado;
echo "<br>";
echo "O dobro da area desse quadrado é de: " .  ($lado * $lado) * 2;
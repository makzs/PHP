<?php

// Tendo como dados de entrada a altura de uma pessoa, construa um script que calcule seu peso ideal, usando a seguinte fórmula:
// Para homens: (72.7*h) - 58
// Para mulheres: (62.1*h) - 44.7

echo "Peso Ideal";

echo "<hr>";

echo "Informe a altura da pessoa: ";

$h = 1.70;
echo $h;
echo "<br>";

echo "Informe o sexo: ";

$sexo = "Masculino";
echo $sexo;
echo "<br>";

echo "<hr>";

if ($sexo == "Masculino") {
    echo "O peso ideal para alguem de sexo " . $sexo . " e altura " . $h . " é de: " . (72.7 * $h) - 58;
} else if ($sexo == "Feminino") {
    echo "O peso ideal para alguem de sexo " . $sexo . " e altura " . $h . " é de: " . (62.1 * $h) - 44.7;
} else {
    echo "Erro!";
}
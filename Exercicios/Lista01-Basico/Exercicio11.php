<form action="" method="GET">
    <label for="num1">Informe a altura: </label>
    <input type="text" name="altura" id="altura">

    <label for="num2">Informe o sexo: </label>
    <input type="text" name="sexo" id="sexo">

    <button type="submit">Enviar</button>
</form>

<?php

// Tendo como dados de entrada a altura de uma pessoa, construa um script que calcule seu peso ideal, usando a seguinte fórmula:
// Para homens: (72.7*h) - 58
// Para mulheres: (62.1*h) - 44.7

echo "Peso Ideal";

echo "<hr>";

$h = $_GET['altura'];
echo "A altura informada foi: " . $h;
echo "<br>";

$sexo = $_GET['sexo'];
echo "O sexo informado foi: " . $sexo;
echo "<br>";

echo "<hr>";

if ($sexo == "Masculino") {
    echo "O peso ideal para alguem de sexo " . $sexo . " e altura " . $h . " é de: " . (72.7 * $h) - 58;
} else if ($sexo == "Feminino") {
    echo "O peso ideal para alguem de sexo " . $sexo . " e altura " . $h . " é de: " . (62.1 * $h) - 44.7;
} else {
    echo "Erro!";
}
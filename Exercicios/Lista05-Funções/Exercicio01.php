<?php
// Faça um programa, com uma função que necessite de três argumentos, eque forneça a soma desses três argumentos.

// função de formulario
function formulario($nome, $numeros)
{
    echo "<h2> $nome </h2>";
    echo '<form action="" method="GET">';

    for ($i = 0; $i < $numeros; $i++) {
        echo "<label>Numero " . ($i + 1) . "</label>";
        echo '<input type="text" name="valor' . ($i + 1) . '" id="valor' . ($i + 1) . '">';
        echo "<br>";
    }

    echo '<button type="submit">Enviar</button>';
    echo "</form>";
}

formulario("Soma de 3 argumentos", 3);
echo "<hr>";

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$valor3 = $_GET['valor3'];

echo "A soma dos 3 valores é igual a: " . $valor1 + $valor2 + $valor3;
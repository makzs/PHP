<?php
// 3. Construa uma função que desenhe um retângulo usando os caracteres ‘+’ ,‘−’ e ‘| ‘. 
// Esta função deve receber dois parâmetros, linhas e colunas, sendo adicionado como padrão o valor mínimo
//  igual a 
// 1.  +----------- +
//     |            |
//     + ---------- +

function formulario($nome, $numeros)
{
    echo "<h2> $nome </h2>";
    echo '<form action="" method="GET">';

    for ($i = 0; $i < $numeros; $i++) {
        echo "<label>Informe o numero de linhas: </label>";
        echo '<input type="text" name="linhas' . ($i + 1) . '" id="linhas' . ($i + 1) . '">';
        echo "<label>Informe o numero de colunas: </label>";
        echo '<input type="text" name="colunas' . ($i + 1) . '" id="colunas' . ($i + 1) . '">';
        echo "<br>";
    }

    echo '<button type="submit">Enviar</button>';
    echo "</form>";
}

formulario("Retangulo", 1);

$linhas = $_GET['linhas'];
$colunas = $_GET['colunas'];
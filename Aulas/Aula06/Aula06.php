<?php

// é possivel criar funções que formam estruturas html para facilitar a escrita de codigo
function formulario($nome, $numeros)
{
    echo "<h2> $nome </h2>";
    // é possivel utilizar aspas simples caso queira usar aspas duplas no meio do texto
    echo '<form action="" method="GET">';
    // echo "um texto só";

    for ($i = 0; $i < $numeros; $i++) {
        echo "<label>Numero " . ($i + 1) . "</label>";
        // para utilizar variaveis dentro de aspas simples tem que fechar e concatenar elas
        echo '<input type="text" name="valor' . ($i + 1) . '" id="valor' . ($i + 1) . '">';
        echo "<br>";
    }

    echo '<button type="submit">Enviar</button>';
    echo "</form>";
}

formulario("Teste", 10);
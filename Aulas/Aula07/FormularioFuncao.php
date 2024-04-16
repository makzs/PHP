<?php

function formulario(...$campos)
{
    echo '<form action="" method="GET">';

    for ($i = 0; $i < count($campos); $i++) {
        echo "<label>" . ucfirst(strtolower($campos[$i])) . ":" .  "</label>";
        echo '<input type="text" name="$campos[$i]' . ($i + 1) . '" id="$campos[$i]' . ($i + 1) . '">';
        echo "<br>";
    }

    echo '<button type="submit">Enviar</button>';
    echo "</form>";
}

formulario("get", "nome", "email", "telefone", "escola");
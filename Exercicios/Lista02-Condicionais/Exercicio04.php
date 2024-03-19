<form action="" method="GET">
    <label for="letra">Informe uma letra: </label>
    <input type="text" name="letra" id="letra">

    <button type="submit">Enviar</button>
</form>

<?php

// Faça um Programa que verifique se uma letra digitada é vogal ou consoante

echo "<hr>";

$letra = strtoupper($_GET['letra']);

switch ($letra) {

    case 'A':
        echo $letra . " é uma vogal!";
        break;
    case 'E':
        echo $letra . " é uma vogal!";
        break;
    case 'I':
        echo $letra . " é uma vogal!";
        break;
    case 'O':
        echo $letra . " é uma vogal!";
        break;
    case 'U':
        echo $letra . " é uma vogal!";
        break;
    default:
        echo $letra . " é uma consoante!";
        break;
}

echo "<hr>";

<form action="" method="GET">
    <label for="sexo">Informe o sexo: </label>
    <input type="text" name="sexo" id="sexo">

    <button type="submit">Enviar</button>
</form>

<?php

// Faça um Programa que verifique se uma letra digitada é "F" ou "M". Conforme a letraescrever: F - Feminino, M - Masculino, Sexo Inválido.

echo "<hr>";

$sexo = strtoupper($_GET['sexo']);

if ($sexo == 'M') {
    echo "Masculino!";
    echo "<br>";
} else if ($sexo == 'F') {
    echo "Feminino!";
    echo "<br>";
} else {
    echo "O sexo informado é invalido!";
    echo "<br>";
}

echo "<hr>";

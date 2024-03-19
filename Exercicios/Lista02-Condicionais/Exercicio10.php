<form action="" method="GET">
    <label for="turno">Informe o turno em que voce estuda (M/V/N): </label>
    <input type="text" name="turno" id="turno">

    <button type="submit">Enviar</button>
</form>

<?php

// Faça um Programa que pergunte em que turno você estuda. Peça para digitar 
// M-matutino ou V-Vespertino ou N- Noturno. Imprima a mensagem "Bom Dia!", "BoaTarde!" ou "Boa Noite!" ou "Valor Inválido!", conforme o caso
echo "<hr>";

$turno = strtoupper($_GET['turno']);

if ($turno == 'M') {
    echo "Bom dia!!";
    echo "<br>";
} else if ($turno == 'V') {
    echo "Boa tarde!";
    echo "<br>";
} else if ($turno == 'N') {
    echo "Boa noite!";
    echo "<br>";
} else {
    echo "O turno informado é invalido!";
    echo "<br>";
}

echo "<hr>";
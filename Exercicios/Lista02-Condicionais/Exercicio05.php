<form action="" method="GET">
    <label for="nota1">Informe a primeira nota: </label>
    <input type="text" name="nota1" id="nota1">

    <label for="nota2">Informe a segunda nota: </label>
    <input type="text" name="nota2" id="nota2">

    <button type="submit">Enviar</button>
</form>

<?php

//  Faça um programa para a leitura de duas notas parciais de um aluno. O programadeve calcular a média alcançada por aluno e apresentar:
//a. A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
//b. A mensagem "Reprovado", se a média for menor do que sete;
//c. A mensagem "Aprovado com Distinção", se a média for igual a dez.

echo "<hr>";

$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];

$media = ($nota1 + $nota2) / 2;

if ($media == 10) {
    echo "A media " . $media . " é o maximo. Aprovado com Distinção!";
    echo "<br>";
} else if ($media >= 7) {
    echo "A media " . $media . " é superior a sete. Aprovado!";
    echo "<br>";
} else {
    echo "A media " . $media . " é inferior a sete. Reprovado!";
    echo "<br>";
}

echo "<hr>";

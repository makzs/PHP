<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>

<body>
    <h1>resposta</h1>

    <?php

    echo print_r($_GET);
    $nome = $_GET["nomePessoa"];
    $sobrenome = $_GET["sobreNome"];

    echo "Bem vindo " . $nome . " " . $sobrenome;

    ?>


</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar usuario</title>
</head>

<body>

    <h1>Alterar usuario</h1>

    <?php
    require_once "banco.php";

    $n = $_POST["nome"] ?? null;
    $nA = $_POST["nomeAntigo"] ?? null;
    $s = $_POST["senha"] ?? null;

    if (is_null($nA) || is_null($s) || is_null($n)) {
        require "formularioAlterar.php";
    } else {
        editarUsuario($nA, $n, $s);
        echo "Usuario Alterado com sucesso";
    }


    ?>


</body>

</html>
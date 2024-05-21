<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar usuario</title>
</head>

<body>

    <h1>Alterar usuario</h1>

    <?php
    require_once "banco.php";

    $n = $_POST["nome"] ?? null;

    if (is_null($n)) {
        require "formularioDeletar.php";
    } else {
        deletarUsuario($n);
        echo "Usuario Deletado com sucesso";
    }


    ?>


</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar usuario</title>
</head>

<body>

    <h1>Criar usuario</h1>

    <?php
    require_once "banco.php";

    $n = $_POST["nome"] ?? null;
    $u = $_POST["usuario"] ?? null;
    $s = $_POST["senha"] ?? null;



    if (is_null($u) || is_null($s) || is_null($n)) {
        require "formularioCriar.php";
    } else {
        criarUsuario($u, $n, $s);
        echo "Usuario criado com sucesso";
    }


    ?>


</body>

</html>
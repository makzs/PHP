<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Formulario: </h1>

    <form action="registro_get.php" method='GET'>
    <label for="">Nome: </label>';
    <input type="text" name="nomePessoa" id="">

    <label for="">Email: </label>
    <input type="text" name="email" id="">

    <label for="">Senha: </label>';
    <input type="text" name="senha" id="">

    <input type="submit" value="enviar">
    </form>

    <?php
    include "Funcoes.php";

    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];

    if (validar_nome_usuario($nome) && validar_email($email) && validar_senha($senha)) {
        header("Location: sucesso.php");
    }
    else{
        header("Location: $erro.php");
    }

    ?>

</body>

</html>
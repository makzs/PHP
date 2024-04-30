<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <?php
    require "Validacao.php";

    if (isset($_POST['usuario']) && isset($_POST['nome']) && isset($_POST['senha'])) {

        $usuario = $_POST["usuario"];
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        $pessoa = array("usu" => $usuario, "nome" => $nome, "senha" => $senha);

        $validacao = validarLogin($pessoa);
    }


    if (isset($_POST['usuario']) && isset($_POST['nome']) && isset($_POST['senha'])) {
        if ($validacao == true) {
            echo "<br>";
            echo "login feito com sucesso <br>";
            echo "Bem vindo";
        } else {
            echo "Erro de login";
            form();
        }
    } else {
        echo "Faça login!";
        form();
    }
    ?>

</body>

</html>

<?php

function form()
{
    echo '<form action="aula10.php" method="post">';
    echo '<label for="">Usuario: </label>';
    echo '<input type="text" name="usuario">';

    echo '<label for="">Nome: </label>';
    echo '<input type="text" name="nome">';

    echo '<label for="">Senha: </label>';
    echo '<input type="text" name="senha">';

    echo '<input type="submit" value="Login">';

    echo '</form>';
}
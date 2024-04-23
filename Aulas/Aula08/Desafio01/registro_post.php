<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario POST</title>
</head>

<body>
    <h1>Formulario: </h1>

    <form action="registro_post.php" method='POST'>
        <label for="">Nome: </label>';
        <input type="text" name="nome" id="">

        <label for="">Email: </label>
        <input type="text" name="email" id="">

        <label for="">Senha: </label>';
        <input type="text" name="senha" id="">

        <input type="submit" value="enviar">
    </form>

    <?php
    include "Funcoes.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
        if (validar_nome_usuario($nome) && validar_email($email) && validar_senha($senha)) {
            header("Location: sucesso.php");
        } else {
            header("Location: erro.php?nome=$nome&email=$email&senha=$senha");
        }
    }

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
</head>

<body>


    <?php
    require_once "banco.php";

    $u = $_POST["usuario"] ?? null;
    $s = $_POST["senha"] ?? null;

    if (is_null($u) || is_null($s)) {
        require "formularioLogin.php";
    } else {

        $q = "SELECT usuario, nome, senha FROM usuarios
        WHERE usuario='$u'";

        $busca = $banco->query($q);
        print_r($busca);

        if ($busca->num_rows > 0) {

            $usu = $busca->fetch_object();

            // echo "<br>" . $usu->senha;

            if (password_verify($s, $usu->senha)) {
                echo "Login :)";
            } else {
                require "formularioLogin.php"; // para testes
                echo "Senha Inválida :/";
            }
        } else {
            require "formularioLogin.php"; // para testes
        }
    }


    ?>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ERRO</h1>

    <?php
    include "Funcoes.php";

    // revisa qual metodo ele recebe
    function getFormData($fieldName)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            return isset($_GET[$fieldName]) ? $_GET[$fieldName] : null;
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            return isset($_POST[$fieldName]) ? $_POST[$fieldName] : null;
        } else {
            return null;
        }
    }

    $nome = getFormData("nome");
    $email = getFormData("email");
    $senha = getFormData("senha");

    if (isset($nome) && isset($email) && isset($senha)) {
        if (validar_nome_usuario($nome) == false) {
            echo "<p> Nome de usuario invalido! </p>";
        }

        if (validar_email($email) == false) {
            echo "<p> Email informado invalido! </p>";
        }

        if (validar_senha($senha) == false) {
            echo "<p> senha informada invalida! </p>";
        }
    } else {
        echo "erro!";
    }

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$cor = $_GET["cor"] ?? "23ffffff";
$nome = $_GET["nome"] ?? "---";

session_start();
$nome = $_SESSION["nome"];

$_SESSION["pessoa"] = [
    "nome" => "Joao",
    "idade" => 19,
];

echo print_r($_SESSION);

// resetar as variaveis
session_unset();

// destruir a sessao
session_destroy();
?>

<body style="background-color: <?= $cor // mesma coisa que <?php echo $cor; 
                                ?>;">
    <form method="get">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="<?= $nome // faz a variavel ficar na caixa de texto, se pode usar placeholder ou value 
                                                                ?>">
        <label for="cor">Cor:</label>
        <input type="color" id="cor" name="cor">
        <br><br>
        <input type="submit" value="Enviar">

    </form>

    <?php
    // validar se a variavel é nula ou nao

    // if else padrao
    /*
    if (isset($_GET['nome'])) {
        $nome = $_GET["nome"];
    } else {
        $nome = " ";
    }
    */

    // operador ternario (if compactado)
    //$nome = isset($_GET["nome"]) ? $_GET["nome"] : "no name";

    // outro metodo do php
    //$nome = $_GET["nome"] ?? "---";

    echo "Oi {$nome}.";

    ?>
</body>

</html>
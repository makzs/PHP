<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cores</title>
</head>

<body>
    <h1>Alterando cor de fundo: </h1>
    <form method="get">
        <label for="cor">Cor:</label>
        <input type="color" id="cor" name="cor">
        <br><br>
        <input type="submit" value="Alterar Cor">
    </form>

    <?php
    if (isset($_GET['cor'])) {
        $cor = $_GET['cor'];
        echo '<style>body { background-color: ' . $cor . '; }</style>';
    }
    ?>
</body>

</html>
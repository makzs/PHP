<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13</title>
</head>

<body>

    <h1>Peças de computador</h1>

    <?php
    require_once "banco2.php";

    $q = "SELECT * FROM marca";
    $busca = $banco->query($q);
    echo print_r($busca);

    while ($obj = $busca->fetch_object()) {
        echo print_r($obj);
    }

    ?>


</body>

</html>
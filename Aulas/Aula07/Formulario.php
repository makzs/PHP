<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Formulario: </h1>

    <form action="resposta.php">
        <input type="submit" value="enviar">
    </form>

    <form action="resposta.php" method="GET">
        <label for="">Nome: </label>
        <input type="text" name="nomePessoa" id="">

        <label for="">Sobrenome: </label>
        <input type="text" name="sobreNome" id="">

        <input type="submit" value="enviar">
    </form>
    <form action="" method="post"></form>

</body>

</html>
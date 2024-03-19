<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula-04</title>
</head>

<body>

    <h1>For</h1>
    <?php

    for ($i = 0; $i < 10; $i++) {
        echo "<br>Meu for funciona! ----- Linha: ";
    }

    ?>

    <h1>while</h1>
    <?php

    $a = 0;
    while ($a < 10) {
        echo "- {$a}";
        $a++;
    }

    ?>

    <h1>Do While</h1>
    <?php

    $var = 87;

    do {
        echo "<br> numero: " . $var;
        $var += 3;
    } while ($var < 100);

    ?>

</body>

</html>
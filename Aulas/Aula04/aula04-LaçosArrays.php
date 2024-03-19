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

    <h1> Lista/ Arrays</h1>

    <?php
    $comidas = array("Batata", "Arroz", "Feijao");
    //echo $comidas;
    //echo var_dump($comidas);
    echo print_r($comidas);
    echo "<br>" . $comidas[1];
    echo "<br>";
    $comidas[3]  = "Pizza";
    echo print_r($comidas);
    echo "<br>";
    $comidas[] = "coxinha";
    echo print_r($comidas);
    echo "<br>";
    $comidas[20] = "maça";
    echo print_r($comidas);
    echo "<br>";
    $comidas[5] = 12.3;
    $comidas[6] = true;
    echo print_r($comidas);
    echo "<br>";

    $totalComida = count($comida);
    echo "<br>Total: {$totalComida}";

    echo "<h4>Liste de compra:</h4>";

    /*
    for ($i = 0; $i < $totalComida; $i++){
        echo "<li> Item: {i} -" . $comidas{[i]};
    }
    */

    // para cada comida dentro do array comidas faça:
    foreach ($comidas as $comida) {
        echo "<li> Item: - " . $comida;
    }

    echo "<h4>Array com indice str: </h4>";
    $pessoa = array("nome" => "Luan", "idade" => "19", "estado" => "Feliz ");
    echo $pessoa["nome"];
    echo $pessoa["idade"];
    echo $pessoa["estado"];

    foreach ($pessoa as $chave => $valor) {
        echo "<li> {$chave} - {$valor}";
    }

    echo "<h4>Array de array </h4>";
    $varias_pessoas = array(
        array("nome" => "Luan", "idade" => "19", "estado" => "Feliz "),
        array("nome" => "Maria", "idade" => "23", "estado" => "Cansada "),
        array("nome" => "João", "idade" => "17", "estado" => "Triste")
    );

    echo $varias_pessoas;

    for ($i = 0; $i < count($varias_pessoas); $i++) {
        echo "<br> Pessoa: ";
        echo print_r($varias_pessoas[$i]);

        foreach ($varias_pessoas[$i] as $chave => $valor) {
            echo "<li> {$chave} - {$valor}";
        }
    }

    ?>



</body>

</html>
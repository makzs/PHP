<form action="" method="GET">
    <label for="valor">Informe o valor que deseja saber a tabuada (numeros de 1 a 10) : </label>
    <input type="text" name="valor" id="valor">

    <button type="submit">Enviar</button>
</form>

<?php
// desenvolva um gerador de tabuada que seja capaz de gerar uma tabuada de qualquer numero entre 1 a 10
// O usuario deve informar de qual numero ele deseja ver a tabuada

$valor = $_GET['valor'];

if ($valor > 0 && $valor < 11) {
    for ($i = 1; $i < 11; $i++) {
        echo $valor . " x " . $i . " = " . $valor * $i;
        echo "<br>";
    }
} else {
    echo "valor invalido! informe um valor de 1 a 10!";
}
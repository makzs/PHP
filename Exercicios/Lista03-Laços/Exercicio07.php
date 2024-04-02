<form action="" method="GET">
    <label for="valor">Informe o valor que deseja saber o fatorial: </label>
    <input type="text" name="valor" id="valor">

    <button type="submit">Enviar</button>

</form>

<?php
// faça um programa que calcule o fatorial de um numero inteiro fornecido pelo usuario
$valor = $_GET['valor'];

$i = $valor;
$resultado = 1;

while ($i > 0) {
    echo "." . $i;
    $resultado *= $i;
    $i--;
}

echo " = " . $resultado;

echo "<hr>";
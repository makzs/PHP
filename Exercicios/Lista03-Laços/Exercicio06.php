<form action="" method="GET">
    <label for="valor">Informe o valor limite da sequencia de fibonacci: </label>
    <input type="text" name="valor" id="valor">

    <button type="submit">Enviar</button>
</form>
<?php
// faça um programa que imprima a sequencia de fibonacci até n-essimo termo

echo "<hr>";

$valor = $_GET['valor'];
$z = 0;
$x = 0;
$y = 1;

while ($y <= $valor) {
    echo " " . $y;

    $z = $x + $y;
    $x = $y;
    $y = $z;
}

echo "<hr>";
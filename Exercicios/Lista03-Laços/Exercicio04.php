<form action="" method="GET">
    <label for="vlr1">Informe o primeiro valor: </label>
    <input type="text" name="vlr1" id="vlr1">

    <label for="vlr2">Informe o segundo valor: </label>
    <input type="text" name="vlr2" id="vlr2">

    <button type="submit">Enviar</button>
</form>

<?php
// altre o exercicio anterior para que ele mostre no final a soma dos numeros 
echo "<hr>";

$vlr1 = $_GET['vlr1'];
$vlr2 = $_GET['vlr2'];

$vlr1Original = $vlr1;
$vlr2Original = $vlr2;

for ($vlr1; $vlr1 < $vlr2 - 1; $vlr1++) {
    echo $vlr1 + 1 . " - ";
}

echo "<hr>";

echo "e a soma dos numeros é: " . $vlr1Original + $vlr2Original;
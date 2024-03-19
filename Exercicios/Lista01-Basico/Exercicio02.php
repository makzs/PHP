<form action="" method="GET">
    <label for="num">Informe o raio de um circulo: </label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

// Escreva um script que pede o raio de um círculo, e em seguida exiba operímetro e área do círculo. Obs. procure por M_PI

echo "<hr>";

$raio = $_GET['num'];

echo "O raio informado é " . $raio;

echo "<br>";

$perimetro = 2 * M_PI * $raio;
$area = M_PI * ($raio * $raio);

echo "O perimetro desse circulo é de: " . $perimetro;

echo "<br>";

echo "A area desse circulo é de: " . $area;

echo "<hr>";

?>
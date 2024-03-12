<form action="" method="GET">
    <label for="num">Informe o valor do produto: R$</label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

//  Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, 
// divida em 10 parcelas e mostre para o usuário ovalor da parcela e o valor total da compra

echo "10 parcelas com 16% de juros";

echo "<hr>";

$valor = $_GET['num'];
echo "O valor informado foi de: " . $valor;
echo "<br>";

$juros = ($valor * 16) / 100;

$parcelas = ($valor + $juros) / 10;

echo "<hr>";

echo "Cada parcela ficara no valor de: R$" . $parcelas;
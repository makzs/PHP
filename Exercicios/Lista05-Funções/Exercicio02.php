<?php
// 2. Construa uma função que receba uma data no formato DD/MM/AAAA e devolva uma string no formato Dia de Mês Por Extenso de AAAA
// .Opcionalmente, valide a data e retorne NULL caso a data seja inválida.
// a. Entra: 10/02/2023
// b. Retorna: 10 de Março de 2023

// função de formulario
function formulario($nome, $numeros)
{
    echo "<h2> $nome </h2>";
    echo '<form action="" method="GET">';

    for ($i = 0; $i < $numeros; $i++) {
        echo "<label>Informe uma data (no formato DD/MM/AAAA) : </label>";
        echo '<input type="text" name="valor' . ($i + 1) . '" id="valor' . ($i + 1) . '">';
        echo "<br>";
    }

    echo '<button type="submit">Enviar</button>';
    echo "</form>";
}

formulario("Data", 1);

$data = $_GET['valor1'];

$dia = substr($data, 0, 2);
$mes = substr($data, 3, 2);
$ano = substr($data, 6, 4);

switch ($mes) {
    case 1:
        $mesExtenso = "janeiro";
        break;
    case 2:
        $mesExtenso = "fevereiro";
        break;
    case 3:
        $mesExtenso = "março";
        break;
    case 4:
        $mesExtenso = "abril";
        break;
    case 5:
        $mesExtenso = "maio";
        break;
    case 6:
        $mesExtenso = "junho";
        break;
    case 7:
        $mesExtenso = "julho";
        break;
    case 8:
        $mesExtenso = "agosto";
        break;
    case 9:
        $mesExtenso = "setembro";
        break;
    case 10:
        $mesExtenso = "outubro";
        break;
    case 11:
        $mesExtenso = "novembro";
        break;
    case 12:
        $mesExtenso = "dezembro";
        break;
}

echo $dia . " de " . $mesExtenso .  " de " . $ano;
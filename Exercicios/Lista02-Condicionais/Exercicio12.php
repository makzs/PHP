<form action="" method="GET">
    <label for="vlrHora">Informe o valor da hora de trabalho: </label>
    <input type="text" name="vlrHora" id="vlrHora">

    <label for="horas">Informe a quantidade de horas de trabalho: </label>
    <input type="text" name="horas" id="horas">

    <button type="submit">Enviar</button>
</form>

<?php

// Faça um programa para o cálculo de uma folha de pagamento, sabendo que os descontos são do Imposto de Renda, que depende do salário bruto (conforme tabela abaixo) 
// e 3% para o Sindicato e que o FGTS corresponde a 11% do Salário Bruto,mas não é descontado (é a empresa que deposita). 
// O Salário Líquido correspondeao Salário Bruto menos os descontos. 
// O programa deverá pedir ao usuário o valorda sua hora e a quantidade de horas trabalhadas no mês
//
// a. Desconto do IR:
// b. Salário Bruto até 900 (inclusive) - isento
// c. Salário Bruto até 1500 (inclusive) - desconto de 5%
// d. Salário Bruto até 2500 (inclusive) - desconto de 10%
// e. Salário Bruto acima de 2500 - desconto de 20% Imprima na tela asinformações, dispostas conforme o exemplo abaixo. 
// No exemplo o valor da hora é 5 e a quantidade de hora é 220.

echo "<hr>";

$vlrHora = $_GET['vlrHora'];
$horas = $_GET['horas'];
$salario = $vlrHora * $horas;

if ($salario <= 900) {
    echo "Salario bruto: R$" . $salario;
    echo "<br>";
    echo "(-) IR (5%): R$" . $ir = ($salario * 0) / 100;
    echo "<br>";
    echo "(-) INSS (10%): R$" . $inss = ($salario * 10) / 100;
    echo "<br>";
    echo "(-) FGTS (10%): R$" . $fgts = ($salario * 11) / 100;
    echo "<br>";
    echo "Total de descontos: R$" .  $ir + $inss;
    echo "<br>";
    $novoSalario = $salario - ($ir + $inss);
    echo "Salario liquido: R$" . $novoSalario;
} else if ($salario <= 1500) {
    echo "Salario bruto: R$" . $salario;
    echo "<br>";
    echo "(-) IR (5%): R$" . $ir = ($salario * 5) / 100;
    echo "<br>";
    echo "(-) INSS (10%): R$" . $inss = ($salario * 10) / 100;
    echo "<br>";
    echo "(-) FGTS (10%): R$" . $fgts = ($salario * 11) / 100;
    echo "<br>";
    echo "Total de descontos: R$" .  $ir + $inss;
    echo "<br>";
    $novoSalario = $salario - ($ir + $inss);
    echo "Salario liquido: R$" . $novoSalario;
} else if ($salario <= 2500) {
    echo "Salario bruto: R$" . $salario;
    echo "<br>";
    echo "(-) IR (5%): R$" . $ir = ($salario * 10) / 100;
    echo "<br>";
    echo "(-) INSS (10%): R$" . $inss = ($salario * 10) / 100;
    echo "<br>";
    echo "(-) FGTS (10%): R$" . $fgts = ($salario * 11) / 100;
    echo "<br>";
    echo "Total de descontos: R$" .  $ir + $inss;
    $novoSalario = $salario - ($ir + $inss);
    echo "Salario liquido: R$" . $novoSalario;
} else if ($salario > 2500) {
    echo "Salario bruto: R$" . $salario;
    echo "<br>";
    echo "(-) IR (5%): R$" . $ir = ($salario * 20) / 100;
    echo "<br>";
    echo "(-) INSS (10%): R$" . $inss = ($salario * 10) / 100;
    echo "<br>";
    echo "(-) FGTS (10%): R$" . $fgts = ($salario * 11) / 100;
    echo "<br>";
    echo "Total de descontos: R$" .  $ir + $inss;
    echo "<br>";
    $novoSalario = $salario - ($ir + $inss);
    echo "Salario liquido: R$" . $novoSalario;
} else {
    echo "Valores informados invalidos!";
}

echo "<hr>";
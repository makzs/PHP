<form action="" method="GET">
    <label for="salario">Informe o valor do salario: </label>
    <input type="text" name="salario" id="salario">

    <button type="submit">Enviar</button>
</form>

<?php

// As Organizações Tabajara resolveram dar um aumento de salário aos seuscolaboradores e lhe contaram para desenvolver o programa que calculará os reajustes. 
// Faça um programa que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual:
// a. salários até R$ 280,00 (incluindo) : aumento de 20%
// b. salários entre R$ 280,00 e R$ 700,00 : aumento de 15%
// c. salários entre R$ 700,00 e R$ 1500,00 : aumento de 10%
// d. salários de R$ 1500,00 em diante : aumento de 5% 
// e. Após o aumento ser realizado, informe na tela:
// f. o salário antes do reajuste;
// g. o percentual de aumento aplicado;
// h. o valor do aumento; 
// i. o novo salário, após o aumento.

echo "<hr>";

$salario = $_GET['salario'];

if ($salario <= 280) {
    $aumento = ($salario * 20) / 100;
    $novoSalario = $salario + $aumento;
    echo "Salario original: " . $salario;
    echo "<br>";
    echo "Percentual do aumento aplicado: 20%";
    echo "<br>";
    echo "Aumento aplicado: " . $aumento;
    echo "<br>";
    echo "Novo salario: " .  $novoSalario;
} else if ($salario <= 700) {
    $aumento = ($salario * 15) / 100;
    $novoSalario = $salario + $aumento;
    echo "Salario original: " . $salario;
    echo "<br>";
    echo "Percentual do aumento aplicado: 15%";
    echo "<br>";
    echo "Aumento aplicado: " . $aumento;
    echo "<br>";
    echo "Novo salario: " .  $novoSalario;
} else if ($salario <= 1500) {
    $aumento = ($salario * 10) / 100;
    $novoSalario = $salario + $aumento;
    echo "Salario original: " . $salario;
    echo "<br>";
    echo "Percentual do aumento aplicado: 10%";
    echo "<br>";
    echo "Aumento aplicado: " . $aumento;
    echo "<br>";
    echo "Novo salario: " .  $novoSalario;
} else if ($salario > 1500) {
    $aumento = ($salario * 5) / 100;
    $novoSalario = $salario + $aumento;
    echo "Salario original: " . $salario;
    echo "<br>";
    echo "Percentual do aumento aplicado: 5%";
    echo "<br>";
    echo "Aumento aplicado: " . $aumento;
    echo "<br>";
    echo "Novo salario: " .  $novoSalario;
} else {
    echo "Salario informado invalido!";
}

echo "<hr>";
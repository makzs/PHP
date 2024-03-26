<?php

// define que avise erros de tipagem
declare(strict_types=1);

function nomeBonito()
{
    echo "testando minha função bonita!<br>";
}

nomeBonito();
nomeBonito();
nomeBonito();

function criarTitulo($texto)
{
    echo "<h1>" . $texto . "</h1>";
}

criarTitulo("Titulo: Aula 05 - Funções");

function tituloLegal($texto)
{
    echo "<h2>################################</h2>";
    echo "<h2>## " . $texto . " ##</h2>";
    echo "<h2>################################</h2>";
}

tituloLegal("Calcular Medias: ");

function calcMedia($nome, $nota1, $nota2)
{
    $media = ($nota1 + $nota2) / 2;

    if ($media >= 7) {
        echo "<p>O aluno(a) " . $nome . " Foi aprovado!</p>";
    } else {
        echo "<p>O aluno(a) " . $nome . " Foi reprovado!</p>";
    }
}

calcMedia("carlos", 6, 9);
calcMedia("maria", 6, 6);
calcMedia("jose", 4, 8);

function somar($a, $b)
{
    $soma = $a + $b;
    echo "<li> {$a} + {$b} = {$soma}";
}

// forma de receber parametros infinitos
function somarNumeros(...$numeros)
{
    //echo print_r($numeros);
    $soma = 0;
    echo "<li>";
    for ($i = 0; $i < count($numeros); $i++) {
        $soma += $numeros[$i];
        echo $numeros[$i] . " +";
    }

    echo " = {$soma}";
}

echo "lista de somas: ";
somar(4, 7);
somar(2, 8);
somar(1, 1);
somar(4, 4);

echo "<br><br>";
echo "Lista de numeros com numero de parametros indefinidos: <br>";
somarNumeros(2, 4, 5, 8, 1, 12, 43, 23);
somarNumeros(1, 34, 56, 78, 100);
somarNumeros(1, 2, 3, 4, 5);
echo "<br><br>";

// se um dos parametros tiver ... ele devera ser o ultimo parametro a ser fornecido
function exemplo($nome, $numero, $texto, ...$coisas)
{
    echo "<br>";
    echo print_r($coisas);
}

exemplo("nome", 30,  "exemplo", 1, 3, 4.3, true, false, "exemploo");

tituloLegal("Outras funções: ");

$verdadeiro = true;

if ($verdadeiro) {
    function calcular($nome, $ano)
    {
        $idade = 2024 - $ano;
        echo "<p> {$nome} tem {$idade} anos</p>";
    }
}

if ($verdadeiro) {
    calcular("jose", 1970);
}

function exemplo2()
{

    echo "<br> exemplo 2";

    function exemplo3()
    {
        echo "<br> exemplo 3";
    }
}

// só é possivel chamar a exemplo 3 apos o uso da exemplo 2 

exemplo2();
exemplo3();

echo "<br><br>";

function somaExemplo($num)
{
    $num += 5;
    echo "num = {$num}";
}

$var1 = 10;
echo "<br> var 1 = {$var1}<br>";
somaExemplo($var1);
echo "<br> var 1 = {$var1}";

echo "<br><br>";

// definir valores padrao para os parametros
function subtracao($a = 10, $b = 5)
{
    $sub = $a - $b;
    echo "<li> {$a} - {$b} = {$sub}";
}

subtracao(1, 5);
subtracao(20);
subtracao();

echo "<br><br>";

// definir a tipagem do parametro
function divisao(float $num1, float $num2)
{
    echo var_dump($num1);
    echo var_dump($num2);
    $result = $num1 / $num2;
    return $result;
}

$div = divisao(10, 5);
//$div = divisao(10texto, 5);
echo "divisão: " . $div;

echo "<br><br>";

function comida()
{
    echo "Estou com fome";
}

// se o nome da função esta dentro da variavel ao chamar a variavel ele chama a função
$fome = "comida";
$fome();

echo "<br><br>";

function conta($a, $b, &$resposta)
{
    $resposta = $a + $b;
}

$resp = 0;
conta(33, 5, $resp);
echo "Resposta: " . $resp;
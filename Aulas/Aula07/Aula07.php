<?php

echo "<h1> Strings </h1>";

// \n nao é um comando de html mas funciona no codigo fonte da pagina (util para organização)
function quebra()
{
    echo "\n<br>\n";
}

$str = "uma string";
$str2 = 'outra string';

echo $str;
quebra();
echo $str[2];
quebra();
echo $str2;
quebra();
echo $str2[2];
quebra();
echo $str[-1];
quebra();

$str[4] = "l";
echo $str;
quebra();

echo "<br>" . $str[1] . "ateus Paulo";
quebra();

$tamanho = strlen($str);
echo "Tamanho: " . $tamanho;
quebra();

for ($i = 0; $i < $tamanho; $i++) {
    echo "<br> > " . $str[$i] . " <";
}
quebra();

// aspas duplas interpreta o que esta dentro
echo "<br> eu sou Feliz";
echo '<br> eu sou Feliz';

quebra();

// aspas simples nao interpreta o que esta dentro
echo "<br> vamo \n embora";
echo '<br> vamo \n embora';

$videogame = "sonic";
echo "<br> Estou jogando: {$videogame}";
echo '<br> Estou jogando: {$videogame}';

quebra();

//echo 'this isn't';
echo "<br>this isn't";
echo '<br>this isn\'t';

quebra();
echo "<br> Deletar disco C:\usuario\\nathan";
quebra();

function soma($a, $b)
{
    return $a + $b;
}

$num = soma(10, 25);
echo "<br> Resultado da soma é: $num";
echo "<br> Resultado da soma é: {$num}";

echo '<br> Resultado da soma é: $num';
echo '<br> Resultado da soma é: {$num}';

//echo "<br> Resultado da soma é: $soma(10,25)";
//echo "<br> Resultado da soma é: {$soma(10, 25)}";

echo "<br> Resultado da soma é: . soma(10,25)";

quebra();

$cores = ["Roxo", "Amarelo", "Cinza"];
echo "<br> Valor do array: {$cores[1]}";
echo "<br> Valor do array: . $cores[2]";

quebra();

$a = 10;
$$a = 20;
echo "<br> valor {$a} -- Valor {$$a} -- Valor R\$$a";

quebra();
quebra();
quebra();

// heredoc um bloco de texto que deixa a tabulação igual no codigo fonte e imprime uma string grande nao precisando de varios echos
$valor = 10;

$heredoc = <<<NomeFeliz

    <h2> Titulo da pagina </h2>
        <p> O texto da pagina </p>
<p> Valor R$ {$valor} </p>

NomeFeliz;

echo $heredoc;

quebra();
quebra();
quebra();

// nowdoc é um heredoc porem com a mesma diferença de aspas duplas " para aspas simsples '
$nowdoc = <<<'OutroNomeFeliz'

    <h2> Titulo da pagina </h2>
    <p> O texto da pagina </p>
    <p> Valor R$ {$valor} </p>

OutroNomeFeliz;

echo $nowdoc;

quebra();
quebra();
quebra();

$tamanho = strlen("1234asdkfnaskdfn");
echo "Tamanho: {$tamanho}";

quebra();
quebra();

$str = "JanEla";
$parte = substr($str, 3, 6);
echo "string: {$str}";
echo "<br>";
echo "Pedaço da string: {$parte}";
echo "<br>";


echo "Maiusculo: " . strtoupper($parte);
echo "<br>";
echo "Minusculo: " . strtolower($parte);


$nova = str_replace("la", "linha", $str);
echo "<br>Nova string: " . $nova;

quebra();
quebra();

/*

    Number_Format() // formartar um numero
    printf() // imprime e formata

    print_r() // imprime um array bonitinho
    var_dump() // mostra o tipo de uma variavel ou array

    ltrim() // remove os espaços a esquerda do texto
    rtrim() // remove os espaços a direita do texto
    trim() // remove todos os espaços do texto

    str_word_count() // contagem das palavras
    explode() // quebra palavras de uma string e divide em arrays
    implode() // o oposto de explode
    str_split() // mesma coisa que o explode porem se pode definir o tamanho de cada pedaço
    join() // o posto de split

    strtoupper() // deixa tudo maisculo
    strtolower() // deixa tudo minusculo
    ucFirst() // deixa só a primeira letra maisculo
    ucwords() // deixa só a primeira letra de cada palavra maisculo

    strrev() // inverte uma string
    strpos() // retorna a posicao de uma coisa especifica
    stripos() // retorna a posicao de uma coisa especifica mesmo se ela for minuscula ou maiscula

*/

// str pad permite voce a manipular o tamanho de uma string com uso de caracteres adicionais
$input = "Alien";
echo str_pad($input, 10);                      // produces "Alien     "
echo "|<br>";
echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
echo "|<br>";
echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
echo "|<br>";
echo str_pad($input,  6, "___");               // produces "Alien_"
echo "|<br>";
echo str_pad($input,  3, "*");                 // produces "Alien"

function titulo($texto)
{
    $tamanho = 20 + strlen($texto);

    echo "<h2><br>";
    echo str_pad($texto, $tamanho, "~", STR_PAD_BOTH);
    echo "</h2><br>";
}

echo titulo("Teste");
echo titulo("Titulo");
echo titulo(" a ");
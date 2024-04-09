<?php
// Faça um programa que receba 2 strings e informe o conteúdo delas seguidodo seu comprimento. Informe também se as duas strings possuem o mesmo comprimento e se 
// são iguais ou diferentes no conteúdo.

$str1 = "Brasil Hexa 2006";
$str2 = "Brasil! Hexa 2006!";

echo "<br>String 1: " . $str1;
echo "<br>String 2: " . $str2;
echo "<br>Tamanho de: " . $str1 .  strlen($str1);
echo "<br>Tamanho de: " . $str2 .  strlen($str2);

if (strlen($str1) == strlen($str2)) {
    echo "<br>As duas strings são de tamanhos iguais";
} else {
    echo "<br>As duas strings são de tamanhos diferentes";
}

if ($str1 == $str2) {
    echo "<br>As duas strings possuem conteudo iguais";
} else {
    echo "<br>As duas strings possuem conteudo diferentes";
}
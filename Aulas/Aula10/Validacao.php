<?php


$usuarios = [
    ["usu" => "miggas", "nome" => "miguel", "senha" => "123"],
    ["usu" => "gdc1000", "nome" => "danilo", "senha" => "abc"],
    ["usu" => "xorza", "nome" => "gabriel", "senha" => "123jf@"],


];


function validarLogin($array)
{

    // declara a variavel como global (pode ser acessado por funcoes)
    global $usuarios;

    for ($i = 0; $i < count($usuarios); $i++) {
        if ($array == $usuarios[$i]) {
            return true;
        }
    }
    return false;
}
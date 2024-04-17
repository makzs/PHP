<?php

$senha = $_GET["senha"];

function validar_nome_usuario($nome)
{
    if (ctype_alpha($nome)) {
        return true;
    } else {
        return false;
    }
}

function validar_email($email)
{
    if (str_contains($email, "@")){
        return true;
    }
    else{
        return false;
    }
}

function validar_senha($senha)
{
    if (count($senha) > 6){
        return true;
    }
    else{
        return false;
    }
}

<?php

$nome = $_GET["nomePessoa"];
$email = $_GET["email"];
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
}

function validar_senha($senha)
{
}

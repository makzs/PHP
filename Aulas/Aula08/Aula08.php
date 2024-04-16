<?php

// importa outro arquivo php para trabalhar (tbm se pode usar o require)
// require necessita do import para rodar o codigo abaixo, enquanto include roda o codigo mesmo nao tendo encotrado o arquivo
include "funcoes.php";


// importando o arquivo vem as funcoes e as variaveis do outro arquivo
echo $carro;
echo "<br>";
echo $mercado;

//metodo get pega da url enquanto o post é escondido do usuario enquanto o resquest pode pegar dos dois
formulario("post", "get", "nome", "email", "telefone", "escola");
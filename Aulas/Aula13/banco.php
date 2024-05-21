<pre>

<?php

$banco = new mysqli("localhost:3307", "root", "", "tercamanha");

function criarNoBD($into, $values)
{
    global $banco;

    $q = "INSERT INTO $into VALUES $values";

    $resp = $banco->query($q);
    echo "<br> Query: " . $q;
    echo var_dump($resp);
}



// insert 
function criarUsuario(String $usuario, String $nome, String $senha): void
{
    global $banco;

    $senha = password_hash($senha, PASSWORD_DEFAULT);

    criarNoBD("usuarios(codigo, usuario, nome, senha)", "(NULL, '$usuario', '$nome', '$senha')");
    // $q = "INSERT INTO usuarios(codigo, usuario, nome, senha) VALUES (NULL, '$usuario', '$nome', '$senha')";

    // $resp = $banco->query($q);
    // echo "<br> Query: " . $q;
    // echo var_dump($resp);
}

//criarUsuario("jonas99", "joel", "666");
// criarUsuario("maria23", "maria", "senha");
// criarUsuario("clarinha_ofc", "clara", "senha123");

// update
function editarUsuario($nomeAlterar, $nome, $senha, $debug = false)
{
    global $banco;

    $set = "";
    if ($nome != "" & $senha != "") {
        // os dois
        $novasenha = password_hash($senha, PASSWORD_DEFAULT);
        $set = "nome='$nome', senha='$novasenha'";
    } else if ($nome != "") {
        // só o nome
        $set = "nome='$nome'";
    } else if ($senha != "") {
        // só a senha
        $novasenha = password_hash($senha, PASSWORD_DEFAULT);
        $set = "senha='$novasenha'";
    }


    $q = "UPDATE usuarios SET $set WHERE usuario='$nomeAlterar'";

    $resp = $banco->query($q);
    if ($debug) {
        echo "<br> Query: " . $q;
        echo var_dump($resp);
    }
}

editarUsuario("clarinha_ofc", "clara", "123445asd");

//delete
function deletarUsuario($nomeDeletar)
{
    global $banco;

    $q = "DELETE FROM usuarios WHERE usuario='$nomeDeletar'";

    $resp = $banco->query($q);
    echo "<br> Query: " . $q;
    echo var_dump($resp);
}

//deletarUsuario("maria23");
// criarUsuario("maria23", "maria", "senha");

?>

</pre>
<pre>

<?php

$banco = new mysqli("localhost:3307", "root", "", "tercamanha");

// echo print_r($banco);

// echo "<br><br><br>";
// echo "busca";
// echo "<br>--------------------------------------------<br>";

// $buscar = $banco->query("SELECT * FROM usuarios");
// echo print_r($buscar);

// echo "<br><br><br>";
// echo "busca geral de tabelas";
// echo "<br>--------------------------------------------<br>";

// while ($obj = $buscar->Fetch_object()) {

//     echo print_r($obj);
// }

// echo "<br><br><br>";
// echo "busca especifica de tabelas";
// echo "<br>--------------------------------------------<br>";
// $buscargdc = $banco->query("SELECT codigo, usuario, nome, senha FROM usuarios WHERE usuario='gdc1000'");

// $usu = $buscargdc->fetch_object();
// echo print_r($usu);

// echo "<br><br><br>";
// echo "Utilizando variaveis do banco";
// echo "<br>--------------------------------------------<br>";

// echo "<br>C: " . $usu->codigo;
// echo "<br>U: " . $usu->usuario;
// echo "<br>N: " . $usu->nome;
// echo "<br>S: " . $usu->senha;

// 

//echo password_hash("123", PASSWORD_DEFAULT);

// insert
function criarUsuario($usuario, $nome, $senha)
{
    global $banco;

    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $q = "INSERT INTO usuarios(codigo, usuario, nome, senha) VALUES (NULL, '$usuario', '$nome', '$senha')";

    $resp = $banco->query($q);
    echo "<br> Query: " . $q;
    echo var_dump($resp);
}

// criarUsuario("roberto100", "roberto", "111");
// criarUsuario("maria23", "maria", "senha");
// criarUsuario("clarinha_ofc", "clara", "senha123");

// update
function editarUsuario($nomeAlterar, $senha)
{
    global $banco;

    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $q = "UPDATE usuarios SET senha='$senha' WHERE usuario='$nomeAlterar'";

    $resp = $banco->query($q);
    echo "<br> Query: " . $q;
    echo var_dump($resp);
}

//editarUsuario("clarinha_ofc", "123456");

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
<form action="" method="GET">
    <label for="nome">Informe o nome: </label>
    <input type="text" name="nome" id="nome">

    <button type="submit">Enviar</button>
</form>
<?php

$nome = $_GET['nome'];

echo "Nome: {$nome}";
echo "<br>";
echo "Nome inverso: " . strrev($nome);
echo "<br>";
echo "<br>";

echo "Nome em coluna: <br>";
for ($i = 0; $i < strlen($nome); $i++) {
    echo $nome[$i] . "<br>";
}

echo "<br>";
echo "Nome em piramide: <br>";
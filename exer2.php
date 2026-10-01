<?php

$nome = $_POST["nome"] ?? "";
$cidade = $_POST["cidade"] ?? "";

echo "Nome: " . $nome;
echo "<br>";
echo "Cidade: " . $cidade;

if ($cidade == "Curitiba") {
    echo "<br>Curitibano!";
}

?>

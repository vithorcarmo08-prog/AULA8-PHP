<?php

session_start();

$nome = $_SESSION["nome"];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Boas-vindas</title>
</head>
<body>

    <h1>Bem-vindo, <?php print $nome; ?>!</h1>

</body>
</html>

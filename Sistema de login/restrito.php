<?php

require_once dirname(__FILE__) . '/model/Usuario.php';

$usuario = new Usuario();

$email = "teste@gmail.com";
$senha = "teste";

$usuario->setEmail($email);
$usuario->setSenha($senha);

if ($usuario->getEmail() == $_POST["email"]) {
    if ($usuario->getSenha() == $_POST["senha"]) {
        echo "Usuário autenticado";
    } else {
        header("Location: index.php?msg=Senha inválida");
    }
} else {
    header("Location: index.php?msg=Usuário não encontrado");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h2>Página restrita</h2>

    <?php
    echo "Você logou com o e-mail: " . $_POST["email"];
    echo " e com a senha: " . $_POST["senha"] . "<br>";
    ?>

    <a href="index.php">Voltar</a>
</body>

</html>
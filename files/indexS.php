<?php
include_once 'bd/listar-usuario.php';

$usuarios = getUsuarios();
$id = $_GET["id"];

$dados = explode(',', $usuarios[$id]);

$nome = $dados[0];
$email = $dados[1];
$senha = $dados[2];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/cssS.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Arquivos em PHP</title>
</head>

<body>
    <h1>Arquivos em PHP</h1>
    <main>
        <section class="i">
            <h2>Cadastro</h2>
            <form action="bd/alterar-usuario.php?id=<?= $_GET["id"] ?>" method="post" class="p-box">
                <div class="box">
                    <label for="txtNome"></label><br>
                    <span class="material-icons"> account_circle</span>
                    <input type="text" id="txtNome" name="nome" placeholder="Nome" value="<?= $nome ?>" required>
                </div>
                <div class="box">
                    <label for="txtEmail"></label><br>
                    <span class="material-icons"> mail </span>
                    <input type="email" id="txtEmail" name="email" placeholder="E-mail" value="<?= $email ?>" required>
                </div>
                <div class="box">
                    <label for="txtSenha"></label><br>
                    <span class="material-icons"> vpn_key </span>
                    <input type="password" id="txtSenha" name="senha" placeholder="Password" value="<?= $senha ?>" required>
                </div>
                <a href="index.php" class="btn">Cancelar</a>
                <input type="submit" value="Alterar" class="btn">
            </form>
        </section>
        <section class="i">
            <h2>Itens</h2>
            <ol>
                <?php
                include_once 'bd/listar-usuario.php';
                $usuarios = getUsuarios();
                foreach ($usuarios as $index => $usuario) {
                ?>
                    <li>
                        <?= $usuario; ?>
                    </li>
                <?php
                }
                ?>
            </ol>
        </section>
    </main>
    <footer>
        <p>Elaborado por @Henrique Eduardo</p>
        <p>Todos os direitos concedidos</p>
    </footer>
</body>

</html>
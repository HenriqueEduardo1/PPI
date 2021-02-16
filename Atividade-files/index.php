<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Arquivos em PHP</title>
    </head>
    <body>
        <h1>Arquivos em PHP</h1>
        <main>
            <section class="i">
                <h2>Cadastro</h2>
                <form action="bd/salvar-usuario.php" method="post">
                    <div>
                        <label for="txtNome">Nome</label><br>
                        <input type="text" id="txtNome" name="nome" placeholder="Nome">
                    </div>
                    <div>
                        <label for="txtEmail">E-mail</label><br>
                        <input type="email" id="txtEmail" name="email" placeholder="E-mail">
                    </div>
                    <div>
                        <label for="txtSenha">Senha</label><br>
                        <input type="password" id="txtSenha" name="senha" placeholder="Password">
                    </div>
                    <div>
                        <input type="submit" value="cadastrar">  
                    </div>            
                </form>
            </section>
            <section class="i">
                <h2>Itens</h2>
                <ol>
                    <?php
                    include_once 'bd/listar-usuario.php';
                    $usuarios = getUsuarios();
                    foreach ($usuarios as $index => $usuario){
                        ?>
                        <li>
                            <?= $usuario; ?>
                            <a href="bd/deletar-usuario.php?id=<?= $index; ?>">
                                <span class="material-icons">
                                    delete_outline
                                </span>
                            </a>
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
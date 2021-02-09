<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Arquivos em PHP</title>
    </head>
    <body>
        <h1>Arquivos em PHP</h1>
        <main>
            <section>
                <h2>Cadastro</h2>
                <form action="bd/salvar-usuario.php" method="post">
                    <div>
                        <label for="txtNome">Nome</label>
                        <input type="text" id="txtNome" name="nome">
                    </div>
                    <div>
                        <label for="txtEmail">E-mail</label>
                        <input type="email" id="txtEmail" name="email">
                    </div>
                    <div>
                        <label for="txtSenha">Senha</label>
                        <input type="password" id="txtSenha" name="senha">
                    </div>
                    <div>
                        <input type="submit" value="cadastrar">  
                    </div>            
                </form>
            </section>
            <section>
                <h2>Itens</h2>
                <ol>
                    <?php
                    include_once 'bd/listar-usuario.php';
                    $usuarios = getUsuarios();
                    foreach ($usuarios as $usuario){
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
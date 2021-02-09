<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.css">
        <title>Arquivos em PHP</title>
    </head>
    <body>
        <h1>Arquivos em PHP</h1>
        <main>
            <section>
                <h2>Cadastro</h2>
                <form action="bd/salvar-usuario.php" method="post" class='modelo-form'>
                    <div class="container">
                        <label for="txtNome">Nome</label><br>
                        <input type="text" id="txtNome" name="nome" placeholder="Nome">
                    </div>
                    <div class="container">
                        <label for="txtEmail">E-mail</label><br>
                        <input type="email" id="txtEmail" name="email" placeholder="E-mail">
                    </div>
                    <div class="container">
                        <label for="txtSenha">Senha</label><br>
                        <input type="password" id="txtSenha" name="senha" placeholder="Password">
                    </div>
                    <div class="container">
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
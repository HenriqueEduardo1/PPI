<?php
//Teste em aula
    $bancoEmail = "adm@login.com.br";
    $bancoSenha = "123456";

    if($bancoEmail == $_POST["email"]){
        if($bancoSenha == $_POST["senha"]){
            echo "Usuário autenticado";
        }else{
            header("Location: index.php?msg=Senha inválida");
            //echo "Senha inválida!";
        }
    }else{
        header("Location: index.php?msg=Usuário não encontrado");
        //echo "Usuário não encontrado!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
        <h2>Página restrita</h2>
        <!--<pre>-->
        <?php
            //Verificação se os dados estão sendo recebido
            //print_r($_GET);
            echo "Você logou com o e-mail: " . $_POST["email"]; 
            echo " e com a senha: " . $_POST["senha"] . "<br>";
        ?>
        <!--</pre>-->
        <a href="index.php">Voltar</a>
    </body>
</html>
<?php
    $ban = file("usuario");
    $dados = explode(',', $ban[$_GET["id"]]);
    $alterar = false;
    
    if(!empty($_POST["nome"])){
        $dados[0] = $_POST["nome"];
        $alterar = true;
    }
    if(!empty($_POST["email"])){
        $dados[1] = $_POST["email"];
        $alterar = true;
    }
    if(!empty($_POST["senha"])){
        $dados[2] = $_POST["senha"] . "\n";
        $alterar = true;
    }
    
    if($alterar){
        $ban[$_GET["id"]] = implode(',', $dados);

        file_put_contents("usuario",null);
        $banco = fopen("usuario", "a");

        foreach($ban as $index => $linha){ 
            fwrite($banco, $linha);  
        }

        fclose($banco);
    }
    
    header("Location: ../index.php");
?>
<?php

    $salvar = true;

    if(!isset($_POST["nome"])){
        $salvar = false;
    }
    if(!isset($_POST["email"])){
        $salvar = false;
    }
    if(!isset($_POST["senha"])){
        $salvar = false;
    }
    if($salvar){
        $banco = fopen("usuario", "a");
        fwrite($banco, $_POST["nome"] . "," . $_POST["email"] . "," . $_POST["senha"] . "\n");
        fclose($banco);
    }
    
    header("Location: ../index.php");
?>
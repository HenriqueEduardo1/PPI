<?php

    $number = 12;
    $numberTwo = 13;

    if($number == $numberTwo){
        echo 'É igual';
    }else{
        echo 'Não é igual';
    }

    echo '<br>';

    if($number < 5){
        echo 'É menor que 5';
    }else{
        echo 'É maior que 5';
    }

    echo '<br>';

    if($numberTwo > 5){
        echo 'num2 é maior que 5';
    }else if($numberTwo < 5){
        echo 'num2 é menor que 5';
    }else{
        echo 'Não indentificado...';
    }

?>
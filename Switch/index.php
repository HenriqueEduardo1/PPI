<?php

    $dia = date('w'); //retorna um número correspondente o dia da semana

    switch($dia){
        case 0:
            $mensagem = 'Domingo';
            break;
        case 1:
            $mensagem = 'Segunda';
            break;
        case 2:
            $mensagem = 'Terça';
            break;
        case 3:
            $mensagem = 'Quarta';
            break;
        case 4:
            $mensagem = 'Quinta';
            break;
        case 5:
            $mensagem = 'Sexta';
            break;
        case 6:
            $mensagem = 'Sábado';
            break;
        default:
            $mensagem = 'Bom dia!';
    }

    echo $mensagem;

?>
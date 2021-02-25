<?php

class Conexao
{
    const SEPARADOR = "|#|";

    public static function salvar($campos)
    {
        $file = fopen(dirname(__FILE__) . "/../bd/joguinho.bd", "a");
        fwrite($file, $campos . "\n");
        fclose($file);
    }
}

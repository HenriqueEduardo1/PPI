<?php

require_once dirname(__FILE__) . '/Conexao.php';

class Joguinho
{
    private string $media;
    private string $nome;

    public function getMedia(): string
    {
        return $this->media;
    }
    public function setMedia(string $media): void
    {
        $this->media = $media;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function salvar()
    {
        $campos = $this->media . Conexao::SEPARADOR . $this->nome;
        //$conn = new Conexao();
        //$conn->salvar($campos);
        Conexao::salvar($campos);
    }
}

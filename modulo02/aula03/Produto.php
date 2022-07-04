<?php

declare(strict_types=1);

class Produto
{
    //Atributos
    private string $nome;
    private float $valor;
    private string $descricao;
    private Categoria $categoria;

    public function __construct(string $nome, float $valor, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->categoria = $categoria;
    }

    //Metodos
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $novoValor): void
    {
        if ($novoValor < 0) {
            die('Ops, valor nao pode ser negativo');
        }

        $this->valor = $novoValor;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $novaDescricao)
    {
        $this->descricao = $novaDescricao;
    }
}

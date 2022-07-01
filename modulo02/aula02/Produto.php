<?php

declare(strict_types=1);

class Produto
{
    //Atributos
    private string $nome;
    private float $valor;

    //Metodos
    public function pegarNome(): string
    {
        return $this->nome;
    }

    public function alterarNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function alterarValor(float $novoValor): void
    {
        if ($novoValor < 0) {
            die('Ops, valor nao pode ser negativo');
        }

        $this->valor = $novoValor;
    }
}

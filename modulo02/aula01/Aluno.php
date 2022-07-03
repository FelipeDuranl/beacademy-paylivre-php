<?php

declare(strict_types=1);

class Aluno //Classe
{
    //Atributos
    private string $nome;
    private string $cpf;

    //Metodos

    public function getNomeAluno(): string
    {
        return $this->nome;
    }

    public function setNomeAluno(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function getCpfAluno(): string
    {
        return $this->cpf;
    }

    public function setCpfAluno(string $novoCpf): void
    {
        $this->cpf = $novoCpf;
    }
}

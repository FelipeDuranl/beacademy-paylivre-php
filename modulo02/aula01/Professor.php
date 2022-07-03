<?php

declare(strict_types=1);

class Professor
{
    private string $nome;
    private string $cpf;
    private float $salario;

    public function getNomeProfessor(): string
    {
        return $this->nome;
    }

    public function setNomeProfessor(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function getCpfProfessor(): string
    {
        return $this->cpf;
    }

    public function setCpfProfessor(string $novoCpf): void
    {
        $this->nome = $novoCpf;
    }

    public function getSalarioProfessor(): float
    {
        return $this->salario;
    }
    public function setSalarioProfessor(float $novoSalatio): void
    {
        $this->salario = $novoSalatio;
    }
}

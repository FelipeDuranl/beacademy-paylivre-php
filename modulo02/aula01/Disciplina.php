<?php

declare(strict_types=1);

class Disciplina
{
    private string $nome;
    private string $curso;

    public function getNomeDisciplina(): string
    {
        return $this->nome;
    }
    public function setNomeDisciplina(string $novoNome): void
    {
        $this->nome = $novoNome;
    }
    public function getCursoDisciplina(): string
    {
        return $this->curso;
    }
    public function setCursoDisciplina(string $novoCurso): void
    {
        $this->curso = $novoCurso;
    }
}

<?php

declare(strict_types=1);

class Curso
{
    private string $nome;
    private string $descricao;
    private int $cargaHoraria;

    public function getNomeCurso(): string
    {
        return $this->nome;
    }

    public function setNomeCurso(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function getDescricaoCurso(): string
    {
        return $this->nome;
    }

    public function setDescricaoCurso(string $novaDescricao): void
    {
        $this->descricao = $novaDescricao;
    }

    public function getCargaCurso(): int
    {
        return $this->cargaHoraria;
    }

    public function setCargaCurso(int $novaCarga): void
    {
        $this->cargaHoraria = $novaCarga;
    }
}

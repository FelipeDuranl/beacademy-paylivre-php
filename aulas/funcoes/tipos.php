<?php

declare(strict_types=1);

function welcome(string $nome): string
{
    return "Bem vindo {$nome}";
}

function soma(float $n1, float $n2): float
{
    return $n1 + $n2;
}

echo soma(10.5, 90);

echo PHP_EOL . '------------------' . PHP_EOL;

echo welcome('Felipe');

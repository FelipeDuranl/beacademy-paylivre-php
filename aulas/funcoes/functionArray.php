<?php

declare(strict_types=1);

function mostarNomes(array $nomes): void
{
    foreach ($nomes as $cadaNome) {
        echo "Nome: " . $cadaNome . PHP_EOL;
    }
}

mostarNomes(['Felipe', 'Julia', 'Larissa']);

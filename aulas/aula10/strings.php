<?php

$nome = 'felipe';
$sobreNome = 'DURAN';

$nome2 = 'julia andrade soares';

echo 'Nome: ' . ucfirst($nome) . PHP_EOL;
echo 'Sobrenome: ' . ucfirst(strtolower($sobreNome)) . PHP_EOL;

echo 'Segundo nome: ' . ucwords($nome2);

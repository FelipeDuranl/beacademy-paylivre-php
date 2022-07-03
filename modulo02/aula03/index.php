<?php

include 'Produto.php';

$p1 = new Produto('Tenis de corrida', 500);
$p1->setDescricao('Tenis para corrida de rua');

$p2 = new Produto('Calça', 120);

$p3 = new Produto('Camisa', 80);

echo '<h1>' . $p1->getNome() . '</h1>';
echo '<h1>' . $p1->getValor() . '</h1>';

<?php

include 'Produto.php';

$p1 = new Produto();
$p1->alterarNome('Tenis de corrida');
$p1->alterarValor(299);

// $p2 = new Produto();
// $p2->nome = 'Calça';
// $p2->preco = -100;

var_dump($p1);
// var_dump($p2);

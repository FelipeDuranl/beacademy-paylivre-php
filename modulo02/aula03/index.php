<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas unissex');
$c2 = new Categoria('Roupas de Banho', 'Toalhas de rosto, e etc..');
$c3 = new Categoria('Calçados', 'Calçados em geral');

$p1 = new Produto('Tenis de corrida', 500);
$p1->setDescricao('Tenis para corrida de rua');

$p2 = new Produto('Calça', 120);

$p3 = new Produto('Camisa', 80);

echo '<h1>' . $p1->getNome() . '</h1>';
echo '<h1>' . $p1->getValor() . '</h1>';

var_dump($c1);
var_dump($c2);
var_dump($c3);

<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas unissex');
$c2 = new Categoria('Roupas de Banho', 'Toalhas de rosto, e etc..');
$c3 = new Categoria('Calçados', 'Calçados em geral');

$p1 = new Produto('Tenis de corrida', 500, $c3);
$p1->setDescricao('Tenis para corrida de rua');

$p2 = new Produto('Calça', 120, $c1);
$p2->setDescricao('calca para corrida de rua');

$p3 = new Produto('Camisa', 80, $c1);
$p3->setDescricao('camisa para corrida de rua');

var_dump($p1);
var_dump($p2);
var_dump($p3);

print_r($p1);
print_r($p2);
print_r($p3);

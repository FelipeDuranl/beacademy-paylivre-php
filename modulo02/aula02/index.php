<?php

include 'Produto.php';

$p1 = new Produto();
$p1->setNome('Tenis de corrida');
$p1->setValor(299);

$p2 = new Produto();
$p2->setNome('Calça');
$p2->setValor(100);

var_dump($p1);
// var_dump($p2);

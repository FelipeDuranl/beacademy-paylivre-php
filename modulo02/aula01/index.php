<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$p1 = new Professor();
$p1->nome = 'Felipe';
$p1->cpf = '555.554.78-000';
$p1->salario = 1000;


var_dump($p1);

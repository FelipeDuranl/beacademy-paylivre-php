<?php

include 'Aluno.php';
include 'Professor.php';
include 'Disciplina.php';
include 'Curso.php';

$a1 = new Aluno(); //Instanciando, objeto Aluno
$a1->nome = 'Felipe';
$a1->cpf = '123.123.123-12';

$professor1 = new Professor(); //Objeto Professor
$professor1->nome = 'José';
$professor1->cpf = '145.656.587-00';
$professor1->salario = '2500';

$cursoPHP = new Curso(); //objeto Curso
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->descricao = 'Aprender o basico e intermediario do PHP';
$cursoPHP->cargaHoraria = 88;

$disciplina = new Disciplina();
$disciplina->nome = 'Gestão empresarial';
$disciplina->curso = 'Economia';

echo "<h1>Aluno: {$a1->nome}</h1>";

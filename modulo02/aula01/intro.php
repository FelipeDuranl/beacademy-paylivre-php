<?php

include 'Aluno.php';
include 'Professor.php';
include 'Disciplina.php';
include 'Curso.php';

$a1 = new Aluno(); //Instanciando, objeto Aluno
$a1->setNomeAluno('Felipe');
$a1->setCpfAluno('123.123.123-00');

$professor1 = new Professor(); //Objeto Professor
$professor1->setNomePRofessor('José');
$professor1->setCpfProfessor('145.656.587-00');
$professor1->setSalarioProfessor('2500');

$cursoPHP = new Curso(); //objeto Curso
$cursoPHP->setNomeCurso('Introdução ao PHP');
$cursoPHP->setDescricaoCurso('Aprender o basico e intermediario do PHP');
$cursoPHP->setCargaCurso(88);

$disciplina = new Disciplina();
$disciplina->setNomeDisciplina('Gestão empresarial');
$disciplina->setCursoDisciplina('Economia');

echo "<h1>" . $a1->getNomeAluno() . "</h1>";

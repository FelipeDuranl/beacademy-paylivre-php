<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

include 'Validar.php';

$c1 = new Cliente('Felipe@email.com', '123123');
$c1->setNome('Felipe');
$c1->setDataCadastro('22/04/2002');
$cpf = "12312312312";

Validar::validarCpf($cpf);

$c1->setCpf($cpf);

$g1 = new Gestor('robert@email.com', '145145', 2800);
$g1->setNome('Robert');
$g1->setHorario('20h');

$gg1 = new GestorGeral('julia@email.com', '15455', 9000);

var_dump($c1);
var_dump($g1);
var_dump($gg1);

print_r($c1);
print_r($g1);
print_r($gg1);

<?php

$a1 = [
    'nome' => 'Teclado',
    'preco' => 'R$ 80,00',
    'descricao' => 'Esse roduto tem como finalidade digitar algo no computador.',
    'image' => 'img/teclado.jpg'
];

$a2 = [
    'nome' => 'Mouse',
    'preco' => 'R$ 50,00',
    'descricao' => 'Ele tem como objetivo facilitar a navegação do usuário pelo SO.',
    'image' => 'img/mouse.jpg'
];

$a3 = [
    'nome' => 'Monitor',
    'preco' => 'R$ 150,00',
    'descricao' => 'PAra visualizar algo, é necessário o monitor para tal feito.',
    'image' => 'img/monitor.jpg'
];

$a4 = [
    'nome' => 'Computador',
    'preco' => 'R$ 500,00',
    'descricao' => 'O computador é uma máquina que processa informações eletronicamente, na forma de dados e pode ser programado para as mais diversas tarefas.',
    'image' => 'img/computador.jpg'
];




$alunos = [ // Dimensao 1
    $a1,
    $a2,
    $a3,
    $a4
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img {
            max-width: 50%;
        }
    </style>
    <title>Produtos
    </title>
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <div class="container">
        <h1 class="mt-5">Alunos</h1>
        <hr>
        <table class="table table-hover table-striped mt-5">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Preços</th>
                    <th>Descrição</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($alunos as $cadaAluno) {
                    echo '<tr>';
                    echo '<td>' . $cadaAluno['nome'] . '</td>';
                    echo '<td>' . $cadaAluno['preco'] . '</td>';
                    echo '<td>' . $cadaAluno['descricao'] . '</td>';
                    echo '<td> <img src=' . $cadaAluno['image'] . '></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
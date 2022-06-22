<?php

$a1 = [
    'nome' => 'chiquin',
    'email' => 'ciqui@email.com',
    'telefone' => '85 930224373',
    'notas' => [
        8,
        9,
        5,
        6
    ]
];

$a2 = [
    'nome' => 'maria',
    'email' => 'maria@email.com',
    'telefone' => '85 930224373',
    'notas' => [
        9,
        5,
        1,
        2    
    ]
];




$alunos = [// Dimensao 1
    $a1,
    $a2,
];

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


<div class="container">
    <h1 class="mt-5">Alunos</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($alunos as $cadaAluno) {
                    echo '<tr>';
                        echo '<td>' . $cadaAluno['nome'] . '</td>';
                        echo '<td>' . $cadaAluno['email'] . '</td>';
                        echo '<td>' . $cadaAluno['telefone'] . '</td>';
                    echo '</tr>';

                }
            ?>
        </tbody>
    </table>
</div>
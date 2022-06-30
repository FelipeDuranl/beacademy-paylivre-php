<?php
$notasCursoA = [
    10,
    9,
    9.5,
    7
];

$notasCursoB = [
    8,
    9.4,
    5,
    6
];

function mediaNotas(array $notas): float
{
    // $total = array_sum($notas);
    // $quat = count($notas);

    // // foreach ($notas as $cadaNotas) {
    // //     $total += $cadaNotas;
    // //     $quat++;
    // // }

    return array_sum($notas) / count($notas);
}

echo mediaNotas($notasCursoA) . PHP_EOL;
echo mediaNotas($notasCursoB) . PHP_EOL;

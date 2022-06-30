<?php

$frutas = [
    [
        'Banana', //0
        'amarelo' //1
    ],
    [
        'Maça', //0
        'Vermelho' //1
    ],
    [
        'Abacaxi', //0
        'Amarelo/Verde' //1
    ],
    [
        'kiwi', //0
        'Verde'//1
    ],
    [
        'Melancia',//0 
        'Vermelho/Verde'//1
    ]
];

$cor = [
    'Amarelo',
    'Vermelho',
    'Amarelo/Verde',
    'Verde',
    'Vermelho/Verde'
];


?>

<table border="1px">
    <tr>
        <th>Fruta</th>
        <?php
            foreach ($frutas as $cadaFruta){
                echo "<td>{$cadaFruta}</td> <br>";
            }
        ?>
    </tr>
    <tr>
        <th>Cor</th>

        <?php
            foreach ($cor as $cadaCor){
                echo "<td>{$cadaCor}</td> <br>";
            }
        
        
        ?>
    </tr>


</table>
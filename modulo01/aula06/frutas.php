<?php

$frutas = [
  'Laranja', //0
  'Banana', //1
  'Abacaxi', //2
  'Tangerina',
  'Morango',
  'Melancia',
  'Maça'
];

echo '<ul>';

    foreach ($frutas as $cadaFruta){
        echo "<li>{$cadaFruta}</li> <br>";
    }

echo '</ul>';
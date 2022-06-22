<?php

$mes = 20;

echo match ($mes){
    1 => 'Janeiro',
    2 => 'fevereiro',
    9 => 'Setembro',
    default => 'mes invalido'
};
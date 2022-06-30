<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, 'Felipe' . PHP_EOL);
fwrite($arquivo, 'Julia' . PHP_EOL);
fwrite($arquivo, 'Larissa' . PHP_EOL);

fclose($arquivo);

<?php

$url = $_SERVER['REQUEST_URI'];

if ($url === '/') {
    echo '<h1>Pagina Inicial</h1>';
} elseif ($url === '/login') {
    echo '<h1>Página Login</h1>';
} elseif ($url === '/cadastro') {
    echo '<h1>Cadastro</h1>';
} else {
    echo '<h1>Padina não encontrada</h1>';
}

<?php

$url = $_SERVER['REQUEST_URI'];

echo match ($url) {
    '/' => 'Pagina Inicial',
    '/login' => '<form method="post"><input type="text" name="user" placehoader="Digite seu usuário"><br><button>Login</button></form>',
    '/cadastro' => '<form method="post"><input type="text" name="user" placehoader="Digite seu usuário"><br><button>Cadastrar</button></form>',
    default => 'Página inválida?!'
};

<?php

$url = explode('?', $_SERVER['REQUEST_URI']);

include 'telas/head.php';
include 'telas/menu.php';
include 'action.php';

echo match ($url[0]) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    //CRUDS
    '/excluir' => excluir(),
    '/editar' => editar(),
    default => erro404()
};


include 'telas/footer.php';

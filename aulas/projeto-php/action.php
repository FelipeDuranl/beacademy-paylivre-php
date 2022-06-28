<?php

function login()
{
    include 'telas/login.php';
}

function cadastro()
{
    if ($_POST) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['telefone'];

        $arquivo = fopen('data/contacts.csv', 'a+');

        fwrite($arquivo, "{$nome};{$email};{$tel}" . PHP_EOL);

        fclose($arquivo);

        echo 'Pronto, cadastro realizado!';
    }

    include 'telas/cadastro.php';
}

function home()
{
    include 'telas/home.php';
}

function admin()
{
    include 'telas/admin.php';
}

function listar()
{
    $contacts = file('data/contacts.csv');
    include 'telas/lista.php';
}

function erro404()
{
    include 'telas/erro404.php';
}

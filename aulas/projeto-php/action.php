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

        $mensagem = 'Pronto, cadastro realizado!';

        include 'telas/mensagem.php';
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

//CRUD
function excluir()
{
    $id = $_GET['id'];

    $contacts = file('data/contacts.csv');

    unset($contacts[$id]);

    unlink('data/contacts.csv');

    $arquivo = fopen('data/contacts.csv', 'a+');

    foreach ($contacts as $eachContacts) {
        fwrite($arquivo, $eachContacts);
    }
    $mensagem = 'Pronto, contato exluido!';
    include 'telas/mensagem.php';

    fclose($arquivo);
}

function editar()
{
    $id = $_GET['id'];

    $contacts = file('data/contacts.csv');

    if ($_POST) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['telefone'];

        $contacts[$id] = "{$nome};{$email};{$tel}" . PHP_EOL;

        unlink('data/contacts.csv');

        $arquivo = fopen('data/contacts.csv', 'a+');

        foreach ($contacts as $eachContacts) {
            fwrite($arquivo, $eachContacts);
        }

        fclose($arquivo);

        $mensagem = 'Pronto, contato editado';

        include 'telas/mensagem.php';
    }

    $data = explode(';', $contacts[$id]);

    include 'telas/editar.php';
}

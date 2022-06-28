<?php

function login()
{
    include 'telas/login.php';
}

function cadastro()
{
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

# beacademy-paylivre-php

Sprint - 5 de PHP.

[![PHP, Hypertext Preprocessort](/assets/images/php-logo.svg)](https://www.php.net/)

## Como instalar o PHP - Windowns

> 1. Instalar o PHP - **PHP Download[PHP](https://www.php.net/downloads)** .
> 2. Extrair a pasta para o **Disco Local (C:)**.
> 3. Abrir o VS Code ou Prompt de Comandos (\php\php -v) para vizualizar a versão.
> 4. Criar Variavel de Ambiente .
>    > 1. Clique no menu inicial.
>    > 2. Digite "Editar as variáveis de ambiente do sistema".
>    > 3. Clique em Variáveis de ambiente.
>    > 4. Vá no menu de variáveis do sistema, clique em path e editar.
>    > 5. Clique em "novo".
>    > 6. Digite "C:\php" para criar o atalho no disco (C:)
>    > 7. Clique em "ok" e feche o terminal.

## Como executar o PHP

> 1. Abra o editor de código ou prompt de comando.
> 2. Inicie um terminal e Abra a pasta onde há o arquvo PHP.
> 3. Digite `php -S localhost:8000` para iniciar o servidor local.
> 4. Ou digite `php -S localhost:8000 -t "seu diretorio"` para subir um servidor apontando para esse diretório. (Como estivesse criando um dominio "localhost:8000/seu-diretorio")
> 5. Entre no seu navegador e abra seu localhost.

## Configuração de extensão

> Abra o arquivo da pasta C:/php/php.ini-production e configure as extenções para usar no seu projeto.
> Para esse projeto será necessário descomentar as linhas 918, 928, 930 e 936.

## Terminal interativo (Interactive Shell)

Permite você testar alguns scripts antes de trabalhar diretamente com a web
`echo 'Ola Mundo!';`

![Interactive Shell](/assets/images/interactive-shell.PNG)

## Comandos

`<?php CODIGO AQUI ?>` - Tag PHP.

`echo` - exibe algo na tela; Aspas simples (') – Indica que estou abrindo um container onde posso escrever praticamente qualquer coisa; Texto: Posso exibir quase qualquer coisa aqui dentro.

`;` - necessário o ponto e virgula ";" no final de cada linha de comando. (echo 'Ola mundo'; echo 'Me chamo Felipe';).

`$_POST` - É uma variável super global PHP que é usada para coletar dados de formulário após enviar um formulário HTML com `method="post"`. `$_POST` também é amplamente usado para passar variáveis. O exemplo abaixo mostra um formulário com um campo de entrada e um botão de envio.

## GET & POST

> Quais informações um usuário consegue capturar da URL de forma prática?
> $_GET -> Ele pega informações pela URL.
> $\_POST -> Ele pega informações de um formulário.
> **Elas são váriaveis super globais.**

## $\_SERVER['REQUEST_URI']

> Retona a url que o usuário foi direcionado

## Include

> Vai ser o controlador "include paht/test.php".

## Function

> Um codigo pronto para reutilizar
> void => tipar quando nao existe retorno
> tipar o return: function exemplo(float $n1, float $n2): float

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>

<body>
    <?php
    $nome = "Felipe";
    $sobrenome = "Duran";
    $idade = 20;
    $faculdade = "FIAP";
    $curso = "Cloud Computing";
    ?>

    <table border="2px">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Faculdade</th>
                <th>Curso</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nome ?></td>
                <td><?php echo $sobrenome ?></td>
                <td><?php echo $faculdade ?></td>
                <td><?php echo $curso ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form{
            display: flex;
            align-items: center;
            
        }
        input, button{
            border-radius: 5px;
            padding: 10px;
            margin:10px;
            border: 1px solid #777777 ;  
            background: rgba(0,0,0,0.1)    
            }
    </style>
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input name="num_um" placeholder="Numero um: "><br>
        <input name="num_dois" placeholder="Numero dois: ">
        <button name="soma">Somar</button>
        <button name="subtracao">Subtrair</button>
        <button name="multiplicacao">multiplicar</button>
        <button name="divisao">Dividir</button>
    </form>

    <?php
        if($_POST){
            if(isset($_POST["soma"])){
                echo $_POST['num_um']. ' + ' .$_POST['num_dois']. ' = ' .$_POST['num_um'] + $_POST['num_dois'];  
            }

            if(isset($_POST["subtracao"])){
                echo $_POST['num_um']. ' - ' .$_POST['num_dois']. ' = ' .$_POST['num_um'] - $_POST['num_dois'];  
            }

            if(isset($_POST["multiplicacao"])){
                echo $_POST['num_um']. ' * ' .$_POST['num_dois']. ' = ' .$_POST['num_um'] - $_POST['num_dois'];  
            }

            if(isset($_POST["divisao"])){
                echo $_POST['num_um']. ' / ' .$_POST['num_dois']. ' = ' .$_POST['num_um'] / $_POST['num_dois'];  
            }
            // echo $_POST['num_um']. ' X ' .$_POST['num_dois']. ' = ' .$_POST['num_um'] * $_POST['num_dois'];
            // var_dump($_POST);
        }
    ?>
        
</body>
</html>


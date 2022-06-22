<form action="" method="post">
    <input name="num_um" placeholder="Numero um: ">
    <button>Enviar</button>
</form>

<?php
    $resultado = 0;
    $x = $_POST['num_um'];
    $y = $x; // ou igual ao metodo post ou input
    $z = 0;

    if($_POST){
        while ($z < $x) {
            $resultado = $resultado + $y;
            $z++;
        }
       echo $resultado;
    }
?>
<form action="" method="post">
    <input name="num_um" placeholder="Numero um: "><br>
    <input name="num_dois" placeholder="Numero dois: ">
    <button>Enviar</button>
</form>

<?php
    if($_POST){
        echo $_POST['num_um']. ' X ' .$_POST['num_dois']. ' = ' .$_POST['num_um'] * $_POST['num_dois'];
    }
?>
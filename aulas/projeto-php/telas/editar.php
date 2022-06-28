<h1>Editar Contato</h1>
<hr>
<form action="" method="post">
    <div class="mb-3">
        <input value="<?php echo $data[0]; ?>" name="nome" type="text" class="form-control" id="name" placeholder="Digite seu nome">
    </div>
    <div class="mb-3">
        <input value="<?php echo $data[1]; ?>" name="email" type="email" class="form-control" id="email" placeholder="Digite seu email">
    </div>
    <div class="mb-3">
        <input value="<?php echo $data[2]; ?>" name="telefone" type="tel" class="form-control" id="telefone" placeholder="Telefone">
    </div>
    <!-- <div class="mb-3">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
    </div> -->
    <button class="btn btn-dark">Editar</button>
</form>
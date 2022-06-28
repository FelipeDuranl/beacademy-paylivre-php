<h1>Listar Contatos</h1>

<table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($contacts as $index => $eachContacts) {
            $parts = explode(';', $eachContacts);
            echo '<tr>';
            echo '<td>' . $parts[0] .  '</td>';
            echo '<td>' . $parts[1] .  '</td>';
            echo '<td>' . $parts[2] .  '</td>';
            echo "<td>
                <a class='btn btn-danger btn-sm' href='/excluir?id={$index}'>Excluir</a>
                <a class='btn btn-warning btn-sm'href='/editar?id={$index}'>Editar</a>

            </td>";
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
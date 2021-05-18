<?php
    $titulo = "Lista de contatos";
    include("includes/head.php");
    include("includes/mensageria.php");
?>
    <table border='1'>
        <thead>
            <tr>
                <th>Nome</tb>
                <th>Idade</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ( $lista as $pessoa ){ ?>
                <tr>
                    <td><a href="/?c=pessoa&m=consulta&id=<?= $pessoa->id ?>" ><?= $pessoa->nome ?></a></td>
                    <td><?= $pessoa->idade ?></td>
                    <td><?= $pessoa->telefone ?></td>
                    <td><?= $pessoa->email ?></td>
                    <td>
                        <a href="/?c=pessoa&m=deletar&id=<?= $pessoa->id ?>">Excluir</a>
                        <a href="/?c=pessoa&m=alteracao&id=<?= $pessoa->id ?>">Alterar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
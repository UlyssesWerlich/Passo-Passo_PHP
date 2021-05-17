<?php
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Lista de contatos";
    include("includes/head.php");

    include("../services/pessoaService.php");
    $lista = listar();
?>
    <table border='1' >
        <thead>
            <tr>
                <th>Nome</tb>
                <th>Idade</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ( $lista as $pessoa ){ ?>
                <tr>
                    <td><a href="/views/consulta.php?id=<?= $pessoa->id ?>" ><?= $pessoa->nome ?></a></td>
                    <td><?= $pessoa->idade ?></td>
                    <td><?= $pessoa->telefone ?></td>
                    <td><?= $pessoa->email ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
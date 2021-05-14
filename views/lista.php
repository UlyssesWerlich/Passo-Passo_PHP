<?php
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Lista de contatos";
    include("includes/head.php");

    $lista = [
        [ 'nome' => 'Ulysses', 'idade' => '24', 'telefone' => '996120819', 'email' => 'werlichborgesulysses@gmail.com' ],
        [ 'nome' => 'Maria', 'idade' => '43', 'telefone' => '996120843', 'email' => 'maria@gmail.com' ],
        [ 'nome' => 'João', 'idade' => '32', 'telefone' => '996120865', 'email' => 'joao@gmail.com' ],
    ];
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
                    <td><?php echo $pessoa['nome'] ?></td>
                    <td><?php echo $pessoa['idade'] ?></td>
                    <td><?php echo $pessoa['telefone'] ?></td>
                    <td><?php echo $pessoa['email'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
    $nome_usuario = "Ulysses Werlich Borges";
    include( $_SERVER['DOCUMENT_ROOT'] .  "/includes/footer.php");
?>
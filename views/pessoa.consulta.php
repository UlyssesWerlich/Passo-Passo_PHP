<?php
    $titulo = "Consulta";
    include("includes/head.php");
?>
    <h4>Informações encontradas: </h4>
    <p>Nome: <?= $pessoa->nome ?> </p>
    <p>Idade: <?= $pessoa->idade ?> </p>
    <p>Telefone: <?= $pessoa->telefone ?> </p>
    <p>E-mail: <?= $pessoa->email ?> </p>
    <p><a href="/?c=pessoa&m=deletar&id=<?= $pessoa->id ?>">Excluir</a></p>
<?php
    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
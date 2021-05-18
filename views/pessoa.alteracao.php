<?php
    $titulo = "Alteração de Contato";
    include("includes/head.php");
    include("includes/mensageria.php");

    $action = "/?c=pessoa&m=alterar&id=$pessoa->id";
    include("includes/formulario.php");

    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
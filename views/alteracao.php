<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Alteração de Contato";
    include("includes/head.php");
    include("includes/mensageria.php");

    include("../services/pessoaService.php");
    $pessoa = consultar($_GET['id']);

    if ( !empty($pessoa) ){
        $action = "/views/confirmacao-alteracao.php?id=$pessoa->id";
        include("includes/formulario.php");
    } else {
        $_SESSION['mensagem'] = [ 'texto' => 'Contato não encontrado', 'tipo' => 'erro'];
        header("Location: /views/lista.php", true);
    }

    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Confirmação do cadastro";
    include("includes/head.php");

    include("../services/pessoaService.php");

    if ( save($_POST['nome'], $_POST['idade'], $_POST['telefone'], $_POST['email']) ){

        $_SESSION['mensagem'] = ['texto' => 'Contato criado com sucesso', 'tipo' => 'sucesso'];
        header('Location: /views/lista.php', true);

    } else {
        
        $sub_mensagens = [];
        if ( !$_POST['nome'] ) array_push( $sub_mensagens , "Necessário informar o nome.");
        if ( !$_POST['idade']) array_push( $sub_mensagens , "Necessário informar a idade.");
        if ( !$_POST['telefone'] ) array_push( $sub_mensagens , "Necessário informar o telefone.");

        $_SESSION['mensagem'] = ['texto' => 'Erro ao fazer a alteração.', $sub_mensagens, 'tipo' => 'erro'];
        header("Location: /views/cadastro.php", true);
    }

    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
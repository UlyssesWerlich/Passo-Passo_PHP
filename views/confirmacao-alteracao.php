<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Confirmação de alteração";
    include("includes/head.php");

    include("../services/pessoaService.php");
    include("../model/Pessoa.php");

    try {
        $pessoa = new Pessoa();
        $pessoa->set($_POST);
        $pessoa->setId((int) $_GET['id']);
        alterar($pessoa);
        
        $_SESSION['mensagem'] = [ 'texto' => 'Contato alterado com sucesso', 'tipo' => 'sucesso'];
        header('Location: /views/lista.php', true);

    } catch (TypeError $e) {
        $sub_mensagens = [];

        if ( !$_POST['nome'] ) array_push( $sub_mensagens , "Necessário informar o nome.");
        if ( !$_POST['idade']) array_push( $sub_mensagens , "Necessário informar a idade.");
        if ( !$_POST['telefone'] ) array_push( $sub_mensagens , "Necessário informar o telefone.");

        $_SESSION['mensagem'] = [ 'texto' => 'Erro ao fazer a alteração.', 'sub_mensagens' => $sub_mensagens, 'tipo' => 'erro'];
        header("Location: /views/alteracao.php?id=" . $_GET['id'] , true);

    } catch (Error $e) {

    }

    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
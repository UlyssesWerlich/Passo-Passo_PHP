<?php
    session_start();
    include("../services/pessoaService.php");

    $id = $_GET['id'];
    $resultado = excluir($id);

    $_SESSION['mensagem'] = $resultado ? [ 'texto' => 'Contato excluído com sucesso', 'tipo' => 'sucesso'] : [ 'texto' => 'Erro ao excluir contato', 'tipo' => 'erro'];
    header("Location: /views/lista.php", true);
?>
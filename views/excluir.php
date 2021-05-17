<?php
    session_start();
    include("../services/pessoaService.php");

    $id = $_GET['id'];
    $resultado = excluir($id);

    $_SESSION['mensagem'] = $resultado ? 'Contato excluído com sucesso' : 'Erro ao excluir contato';
    header("Location: /views/lista.php", true);
?>
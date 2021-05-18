<?php
    session_start();

    $titulo = "Cadastro";
    include("includes/head.php");
    include("includes/mensageria.php");

    $action = "/views/confirmacao-cadastro.php";
    include("includes/formulario.php");
    
    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
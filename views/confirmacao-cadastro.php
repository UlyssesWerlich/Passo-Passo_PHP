<?php
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Confirmação do cadastro";
    include("includes/head.php");

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
?>

    <h4>Cadastro efetuado com sucesso!</h4>

    <h5>Informações cadastradas:</h5>
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?> </p>
    <p>Telefone: <?= $telefone ?> </p>
    <p>E-mail: <?= $email ?> </p>

<?php
    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
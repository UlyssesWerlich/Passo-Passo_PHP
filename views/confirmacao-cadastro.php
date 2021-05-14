<?php
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Confirmação do cadastro";
    include("includes/head.php");

    if ( $_POST['nome'] && $_POST['idade'] && $_POST['telefone'] ){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
?>

    <h4>Cadastro efetuado com sucesso!</h4>

    <h5>Informações cadastradas:</h5>
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?> </p>
    <p>Telefone: <?= $telefone ?> </p>
    <p>E-mail: <?= $email ?> </p>

<?php
    } else {
        echo "Erro ao enviar o formulário";
    }

    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
<?php
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Confirmação do cadastro";
    include("includes/head.php");

    include("../services/pessoaService.php");

    if ( $_POST['nome'] && $_POST['idade'] && $_POST['telefone'] ){
        $pessoa = save($_POST['nome'], $_POST['idade'], $_POST['telefone'], $_POST['email']);
    
?>

    <h4>Cadastro efetuado com sucesso!</h4>

    <h5>Informações cadastradas:</h5>
    <p>Nome: <?= $pessoa['nome'] ?> </p>
    <p>Idade: <?= $pessoa['idade'] ?> </p>
    <p>Telefone: <?= $pessoa['telefone'] ?> </p>
    <p>E-mail: <?= $pessoa['email'] ?> </p>

<?php
    } else {
        echo "Erro ao enviar o formulário";

        if ( !$_POST['nome'] ) echo "<p>Necessário informar o nome</p>";
        if ( !$_POST['idade'] ) echo "<p>Necessário informar a idade</p>";
        if ( !$_POST['telefone'] ) echo "<p>Necessário informar o telefone</p>";
    }

    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
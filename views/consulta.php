<?php
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Consulta";
    include("includes/head.php");

    include("../services/pessoaService.php");

    $id = $_GET['id'];

    $pessoa = consultar($id);
    if ( !empty($pessoa) ){
?>
    <h4>Informações encontradas:</h4>
    <p>Nome: <?= $pessoa->nome ?></p>
    <p>Idade: <?= $pessoa->idade ?></p>
    <p>Telefone: <?= $pessoa->telefone ?></p>
    <p>E-mail: <?= $pessoa->email ?></p>

<?php
    } else {
        echo "Informação não encontrada";
    }
    
    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
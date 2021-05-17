<?php
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Confirmação do cadastro";
    include("includes/head.php");

    try{
        $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $pdo = new PDO("mysql:host=localhost;dbname=pessoas","root","COxinha2020@", $dsn_Options);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    if ( $_POST['nome'] && $_POST['idade'] && $_POST['telefone'] ){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $query = $pdo->prepare("INSERT INTO pessoas(nome, idade, telefone, email) VALUES('$nome', '$idade', '$telefone', '$email');");
        $query->execute();
        $pdo = null;
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

        if ( !$_POST['nome'] ) echo "<p>Necessário informar o nome</p>";
        if ( !$_POST['idade'] ) echo "<p>Necessário informar a idade</p>";
        echo !$_POST['telefone'] ? "<p>Necessário informar o telefone</p>" : "";
    }

    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
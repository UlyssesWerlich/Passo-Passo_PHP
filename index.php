<?php
    date_default_timezone_set('America/Sao_Paulo');
    $nome_usuario = "Ulysses Werlich Borges";

    include("./views/includes/head.php");
?>


    <body>
        <h1>Passo a Passo</h1>
        <h3>Seja bem vindo, <?php echo "$nome_usuario" ?>.</h3>

        <p> <a href="/views/second-page.php">Link para a segunda página</a></p>

        <p>Hora de acesso: <?= date('d/m/Y \à\s H:i:s') ?></p>
    </body>

<?php
    include("views/includes/footer.php");
?>
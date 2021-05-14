<?php
    date_default_timezone_set('America/Sao_Paulo');
    $nome_usuario = "Ulysses Werlich Borges";

    include("views/includes/head.php");
?>

    <body>
        <h1>Passo a Passo</h1>
        <h3>Você está na segunda página.</h3>

        <p><a href="/">Link para página inicial</a></p>

        <p>Hora de acesso: <?= date('d/m/Y \à\s H:i:s') ?></p>
    </body>

<?php
    include("../views/includes/footer.php");
?>
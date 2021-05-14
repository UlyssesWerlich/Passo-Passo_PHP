<?php
    date_default_timezone_set('America/Sao_Paulo');
    $nome_usuario = "Ulysses Werlich Borges";
?>

<!DOCTYPE html>
<html lang='pt-br'>

    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='/styles/style.css'>
        <title>Passo a passo</title>
    </head>

    <body>
        <h1>Passo a Passo</h1>
        <h3>Você está na segunda página.</h3>

        <p><a href="/">Link para página inicial</a></p>

        <p>Hora de acesso: <?php echo date('d/m/Y \à\s H:i:s') ?></p>
    </body>

</html>


<?php
    if (isset($_SESSION['mensagem']) && !empty($_SESSION['mensagem'])){
        $mensagem = $_SESSION['mensagem'];
        $texto = $mensagem['texto'] ?? '';
        $subMensagens = $mensagem['sub_mensagens'] ?? [];
        $tipo = $mensagem['tipo'];
?>
    <link rel='stylesheet' href='/views/styles/mensageria.css'>
    <div class="mensageria">
        <div class='mensagem'>
            <p class='<?= $tipo ?>'><?= $texto ?></p>
        </div>
        <?php foreach( $subMensagens as $subMensagem ) { ?>
            <div class="sub-mensagem">
                <p class='<?= $tipo ?>'><?= $subMensagem ?></p>
            </div>
        <?php } ?>
    </div>
<?php
        unset($_SESSION['mensagem']);
    }
?>
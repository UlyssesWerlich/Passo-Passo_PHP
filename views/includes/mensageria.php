<?php
    if (isset($_SESSION['mensagem']) && !empty($_SESSION['mensagem'])){
        $mensagem = (object) $_SESSION['mensagem'];
?>
    <link rel='stylesheet' href='/views/styles/mensageria.css'>
    <div class="mensageria">
        <div class='mensagem'>
            <p class='<?= $mensagem->tipo ?>'><?= $mensagem->texto ?? ''?></p>
        </div>
        <?php foreach( $mensagem->sub_mensagens ?? [] as $subMensagem ) { ?>
            <div class="sub-mensagem">
                <p class='<?= $mensagem->tipo ?>'><?= $subMensagem ?></p>
            </div>
        <?php } ?>
    </div>
<?php
        unset($_SESSION['mensagem']);
    }
?>
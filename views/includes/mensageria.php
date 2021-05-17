<?php
    if (isset($_SESSION['mensagem']) && !empty($_SESSION['mensagem'])){
        $mensagem = $_SESSION['mensagem'];
?>
    <script>alert('<?= $mensagem ?>')</script>

<?php
        unset($_SESSION['mensagem']);
    }
?>
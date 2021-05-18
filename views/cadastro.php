<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Cadastro";
    include("includes/head.php");
    include("includes/mensageria.php");
?>

    <div>
        <form name="form" method="POST" action="/views/confirmacao-cadastro.php">
            <div>
                <label class="control-label" for='nome'>Nome</label>
                <input type='text' minlength="3" maxlength="45" name="nome" id="nome" class="form-control" />
            </div>

            <div>
                <label class="control-label" for='idade'>Idade</label>
                <input type='number' minlength="1" maxlength="3" name="idade" id="idade" class="form-control" />
            </div>

            <div>
                <label class="control-label" for='telefone'>Telefone</label>
                <input type='text' minlength="7" maxlength="15" name="telefone" id="telefone" class="form-control" />
            </div>

            <div>
                <label class="control-label" for='nome'>E-mail</label>
                <input type='email' minlength="10" maxlength="45" name="email" id="email" class="form-control" />
            </div>

            <div>
                <input type='submit' value="Enviar" name="cadastro" />
            </div>
        </form>
    </div>
    
<?php
    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
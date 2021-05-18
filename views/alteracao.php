<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    $titulo = "Alteração de Contato";
    include("includes/head.php");
    include("includes/mensageria.php");

    include("../services/pessoaService.php");
    $id = $_GET['id'];
    $pessoa = consultar($id);
    if ( !empty($pessoa) ){
?>
    <div>
        <form name="form" method="POST" action="/views/confirmacao-alteracao.php?id=<?php echo $pessoa->id ?>">
            <div>
                <label class="control-label" for='nome'>Nome</label>
                <input type='text' value="<?php echo $pessoa->nome ?>" minlength="3" maxlength="45" name="nome" id="nome" class="form-control" />
            </div>

            <div>
                <label class="control-label" for='idade'>Idade</label>
                <input type='number' value="<?php echo $pessoa->idade ?>" minlength="1" maxlength="3" name="idade" id="idade" class="form-control" />
            </div>

            <div>
                <label class="control-label" for='telefone'>Telefone</label>
                <input type='text' value="<?php echo $pessoa->telefone ?>" minlength="7" maxlength="15" name="telefone" id="telefone" class="form-control" />
            </div>

            <div>
                <label class="control-label" for='nome'>E-mail</label>
                <input type='email' value="<?php echo $pessoa->email ?>" minlength="10" maxlength="45" name="email" id="email" class="form-control" />
            </div>

            <div>
                <input type='submit' value="Enviar" name="cadastro" />
            </div>
        </form>
    </div>
<?php
    } else {
        echo "Contato não encontrado";
    }

    $nome_usuario = "Ulysses Werlich Borges";
    include("includes/footer.php");
?>
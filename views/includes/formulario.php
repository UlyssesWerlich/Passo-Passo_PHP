    <div>
        <form name="form" method="POST" action="<?= $action ?>">
            <div>
                <label class="control-label" for='nome'>Nome</label>
                <input type='text' value="<?= $pessoa->nome ?? '' ?>" minlength="3" maxlength="45" name="nome" id="nome" class="form-control" />
            </div>

            <div>
                <label class="control-label" for='idade'>Idade</label>
                <input type='number' value="<?= $pessoa->idade ?? '' ?>" minlength="1" maxlength="3" name="idade" id="idade" class="form-control" />
            </div>

            <div>
                <label class="control-label" for='telefone'>Telefone</label>
                <input type='text' value="<?= $pessoa->telefone ?? '' ?>" minlength="7" maxlength="15" name="telefone" id="telefone" class="form-control" />
            </div>

            <div>
                <label class="control-label" for='nome'>E-mail</label>
                <input type='email' value="<?= $pessoa->email ?? '' ?>" minlength="10" maxlength="45" name="email" id="email" class="form-control" />
            </div>

            <div>
                <input type='submit' value="Enviar"/>
            </div>
        </form>
    </div>
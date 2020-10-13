<main>

    <div class="container">
        <section>
            <a href="index.php">
                <button class="btn btn-danger">Voltar</button>
            </a>
            
            <h2 class="mt-3 text-light"><?=TITTLE?></h2>

            <form method="post" class="jumbotron bg-light">
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nome Completo</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome..." value="<?php if(isset($obFuncionario)){echo $obFuncionario->getNome();}?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Data de Nascimento</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="date" name="data" id="data" value="<?php if(isset($obFuncionario)){echo $obFuncionario->getData();}?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Área de Alocação</label>
                    <div class="col-sm-10">
                        <select name="area_atoacao" class="form-control" required>
                            <option value="0">Selecione...</option>
                            <option value="Recursos Humanos">Recursos Humanos</option>
                            <option value="Tecnologia da Informação">Tecnologia da Informação</option>
                            <option value="Serviços Gerais">Serviços Gerais</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Situação</label>
                    <div class="col">
                        <label class="form-control">
                            <input type="radio" name="situacao" value="s" id="situacao" checked readonly> Ativo(a)
                        </label>
                        <label class="form-control">
                            <input type="radio" name="situacao" value="<?if(isset($obFuncionario)){if(strstr($obFuncionario->getStatus(), 'n')){echo 'checked';}}?>" id="situacao"> Inativo(a)
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="mt-4 col-sm-12">
                        <button type="submit" class="form-control btn btn-success">Enviar</button>
                    </div>
                </div>
            </form>

        </section>
    </div>

</main>
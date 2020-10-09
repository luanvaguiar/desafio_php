<main>

    <div class="container">
        <section>
            <a href="index.php">
                <button class="btn btn-danger">Voltar</button>
            </a>
            
            <h2 class="mt-3 text-light">Cadastrar Funcionário</h2>

            <form method="post" class="jumbotron bg-light" action="#">
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nome Completo</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" placeholder="Nome...">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Data de Nascimento</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="date" value="2020-10-01" name="data" id="data">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Área de Alocação</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>Selecione...</option>
                            <option>Recursos Humanos</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="mt-4 col-sm-12">
                        <button type="submit" class="form-control btn btn-success">Cadastrar</button>
                    </div>
                </div>
            </form>

        </section>
    </div>

</main>
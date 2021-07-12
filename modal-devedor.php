<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><span class="flaticon-user-11"></span> Cadastrar devedor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">

                    <input type="hidden" id="id_devedor_alterar" name="id_devedor_alterar">

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="nome">Nome <span class="text text-danger">*</span></label>
                            <input type="text" class="form-control" name="nome" id="nome" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="cpf">CPF <span class="text text-danger">*</span></label>
                            <input type="text" class="form-control" name="cpf" id="cpf" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="endereco">Endereço <span class="text text-danger">*</span></label>
                            <input type="text" class="form-control" name="endereco" id="endereco" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="data_nascimento">Data de nascimento <span class="text text-danger">*</span></label>
                            <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default btn-rounded mb-4 mt-2" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success btn-rounded mb-4 mt-2" name="salvar_devedor">Salvar devedor</button>
            </form>

            </div>
        </div>
        </div>
    </div>
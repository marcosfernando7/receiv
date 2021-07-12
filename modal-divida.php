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

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="devedor_id">Selecione do devedor - CPF <span class="text text-danger">*</span></label>
                            <select name="devedor_id" id="devedor_id" class="form-control" required>
                                <?php foreach($devedores as $devedor) : ?>
                                    <option value="<?= $devedor->id_devedor ?>"><?= $devedor->nome ?> - <?= $devedor->cpf ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="valor">Valor (R$)</label>
                            <input type="text" id="valor" name="valor" class="form-control" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="valor">Data de vencimento</label>
                            <input type="date" id="data_vencimento" name="data_vencimento" class="form-control" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="valor">Descrição</label>
                            <textarea name="descricao" id="" rows="6" name="descricao" class="form-control" required></textarea>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default btn-rounded mb-4 mt-2" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success btn-rounded mb-4 mt-2" name="atribuir_divida">Atribuir</button>
            </form>

            </div>
        </div>
        </div>
    </div>
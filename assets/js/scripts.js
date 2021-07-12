$('#btn-cadastrar').on('click', function(){
    $('#id_devedor_alterar').val('');
    $('#nome').val('');
    $('#cpf').val('');
    $('#endereco').val('');
    $('#data_nascimento').val('');
    $('#exampleModal').modal('show');


    $('#btn-acao').html('<button type="submit" class="btn btn-success btn-rounded mb-4 mt-2" name="salvar_devedor">Salvar devedor</button>');

});


$('.excluir_devedor').on('click', function(){

    const id_devedor = $(this).attr('data-id');
    $('#id_devedor_excluir').val(id_devedor);

});

// editar devedor
$('.editar_devedor').on('click', function(){

    const id_devedor = $(this).attr('data-id');

    var request = $.ajax({
        url: window.location.href,
        type: 'POST',
        dataType: 'json',
        data: {
            id_devedor: id_devedor,
            editar_devedor: true
        }
    });

    request.done(function(e){
        $('#nome').val(e.nome);
        $('#cpf').val(e.cpf);
        $('#endereco').val(e.endereco);
        $('#data_nascimento').val(e.data_nascimento);
        $('#id_devedor_alterar').val(e.id_devedor);

        $('#btn-acao').html('<button type="submit" class="btn btn-primary btn-rounded mb-4 mt-2" name="alterar_devedor">Alterar devedor</button>');

    });

    request.fail(function(e){
        console.log(e);
    });
});
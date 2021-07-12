<?php

// chama o método inserir
if(isset($_POST['salvar_devedor'])) :

    // inserir
    if($_POST['id_devedor_alterar'] == '') :
        $dados = array(
            'nome'              => campo_requerido($_POST['nome']),
            'cpf'               => campo_requerido(tratar_cpf($_POST['cpf'])),
            'endereco'          => campo_requerido($_POST['endereco']),
            'data_nascimento'   => campo_requerido($_POST['data_nascimento'])
        );

        $devedor->inserir($pdo, $dados);

    // alterar
    else :
        $dados = array(
            'id'                => campo_requerido($_POST['id_devedor_alterar']),
            'nome'              => campo_requerido($_POST['nome']),
            'cpf'               => campo_requerido(tratar_cpf($_POST['cpf'])),
            'endereco'          => campo_requerido($_POST['endereco']),
            'data_nascimento'   => campo_requerido($_POST['data_nascimento'])
        );

        $devedor->alterar($pdo, $dados);

    endif;
endif;

// chama o método excluir e passa como parametro o id
if(isset($_POST['delete_devedor'])) :
    $id = $_POST['id_devedor_excluir'];
    $devedor->excluir($pdo, $id);
endif;


// dados do editar
if(isset($_POST['editar_devedor']) == true) :
    $id = $_POST['id_devedor'];
    $devedor->editar($pdo, $id);
    exit();
endif;

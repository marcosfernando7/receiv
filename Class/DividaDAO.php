<?php

if(isset($_POST['atribuir_divida'])) :
    $dados = array(
        'devedor_id'        => campo_requerido($_POST['devedor_id']),
        'valor'             => campo_requerido($_POST['valor']),
        'data_vencimento'   => campo_requerido($_POST['data_vencimento']),
        'descricao'         => campo_requerido($_POST['descricao'])
    );

    $divida->inserir($pdo, $dados);

endif;
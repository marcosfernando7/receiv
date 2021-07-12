<?php
function tratar_cpf($value){
    $fone = str_replace(array('.', '-'), '', $value);
    return $fone;
}


function campo_requerido($value){

    $value = trim($value);

    if($value != '') :
        return $value;
    else :
        echo "Um ou outro campo ficou sem ser preenchido!";
        exit();
    endif;
}

function mask($val, $mask){
    $maskared = '';
        $k = 0;
        for($i = 0; $i<=strlen($mask)-1; $i++){
            if($mask[$i] == '#'){
        if(isset($val[$k]))
            $maskared .= $val[$k++];
        } else {
        if(isset($mask[$i]))
            $maskared .= $mask[$i];
            }
        }
    return $maskared;
}

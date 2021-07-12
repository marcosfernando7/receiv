<?php
    class Divida{

        public function inserir($pdo, $dados){

            $sql = "INSERT into dividas (descricao_titulo, valor, data_vencimento, devedor_id)
            values(:descricao, :valor, :data_vencimento, :devedor_id)";

            $pdo->create($sql, $dados);

            header('Location: dividas.php?inserido=true');
        }


        public function listar($pdo){

            $sql = "SELECT data_vencimento, nome, cpf, valor from devedores de
                    inner join dividas di
                        on de.id_devedor = di.devedor_id
                            order by di.id_divida DESC";

            $lista = $pdo->list($sql, null);

            return $lista;
        }

        public function somar_total($pdo){

            $sql = "SELECT round(sum(valor),2) as total from dividas";

            $total = $pdo->edit($sql, null);

            return $total;
        }

    }


    $divida = new Divida();
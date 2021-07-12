<?php
class Devedor{


    // insere o devedor no banco de dados
    public function inserir($pdo, $dados){

        $sql = "INSERT into devedores (nome, cpf, endereco, data_nascimento, updated)
                    values(:nome, :cpf, :endereco, :data_nascimento, CURRENT_TIME)";

        $pdo->create($sql, $dados);

        header('Location: devedores.php?inserido=true');
    }

    // lista os devedores
    public function listar($pdo){

        $sql = "SELECT id_devedor, nome, cpf, endereco
                    from devedores
                        order by id_devedor DESC";

        return $pdo->list($sql, null);
    }


    // excluir o devedor
    public function excluir($pdo, $id){

        $sql = "DELETE from devedores
                    where id_devedor = :id";

        $pdo->delete($sql, $id);

        header('Location: devedores.php?delete=true');

    }


    // editar o devedor
    public function editar($pdo, $id){

        $sql = "SELECT  id_devedor,
                        nome,
                        cpf,
                        endereco,
                        data_nascimento
                            from devedores
                                where id_devedor = :id";

        $edit = $pdo->edit($sql, $id);

        echo json_encode($edit);
    }

    // alterar dados do devedor
    public function alterar($pdo, $dados){

        $sql = "UPDATE devedores set
                    nome = :nome,
                    cpf = :cpf,
                    endereco = :endereco,
                    data_nascimento = :data_nascimento
                        where id_devedor = :id";

        $pdo->update($sql, $dados);

        header('Location: devedores.php?alterado=true');
    }

}

$devedor = new Devedor();
<?php
require_once ('C:/wamp64/www/projects.com/ArcadeGames/Entities/Venda.php');
require_once 'Conexao.php';

Class CrudVenda{

    public function createVenda($email){
        try{
            $hoje = date('Y/m/d');

            $usuario = new Cliente();
            $crudUsuario = new CrudCliente();
                    
            foreach($crudUsuario->read($email) as $usuario):
                $id_usu = $usuario['id_cliente'];
            endforeach;
            
            $sql = "INSERT INTO venda(data_venda, id_cliente) VALUES(?,?)";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $hoje);
            $stmt->bindValue(2, $id_usu);
            $stmt->execute();

            return $id_usu;
        }catch(Exception $e){
            echo 'ERRO: ', $e->getMessage();
            header('Location: ../../');
        }
    }

    public function readIdVenda($id_usu, $hoje){
        try{
            $sql = "SELECT id_venda FROM venda WHERE id_cliente = ? AND data_venda = ?";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id_usu);
            $stmt->bindValue(2, $hoje);
            $stmt->execute();

            if($stmt->rowCount() > 0):
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            else:
                return [];
            endif;
        }catch(Exception $e){
            echo 'ERRO: ', $e->getMessage();
            header('Location: ../../');
        }
    }

    public function createJogoVenda($nome, $quantidade, $idvenda){
        try{
            $j = new Jogo();

            $sql1 = "SELECT id_prod FROM descricao_jogo WHERE nome = ?";
            $stmt1 = Conexao::getConn()->prepare($sql1);
            $stmt1->bindValue(1, $nome);
            $stmt1->execute();

            $resultado = $stmt1->fetchAll(PDO::FETCH_ASSOC);

            foreach($resultado as $j):
                $id_jogo = $j['id_prod'];
            endforeach;
            
            $sql = "INSERT INTO jogo_venda(id_produto, quantidade, idv) VALUES(?,?,?)";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id_jogo);
            $stmt->bindValue(2, $quantidade);
            $stmt->bindValue(3, $idvenda);
            $stmt->execute();
        }catch(Exception $e){
            echo 'ERRO: ', $e->getMessage();
            header('Location: ../../');
        }
    }
}
?>
    
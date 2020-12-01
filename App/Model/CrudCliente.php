<?php

require_once ('C:/wamp64/www/projects.com/ArcadeGames/Entities/Cliente.php');

class CrudCliente {

    public function create(Cliente $c){
        try{
            $sql1 = "INSERT INTO cliente (nome) VALUES (?)";

            $email = $c->getEmail();
            $senha = $c->getSenha();

            $stmt1 = Conexao::getConn()->prepare($sql1);
            $stmt1->bindValue(1, $c->getNome());

            $stmt1->execute();

            $sql2 = "SELECT id_cliente FROM cliente WHERE nome = ?";

            $stmt2 = Conexao::getConn()->prepare($sql2);
            $stmt2->bindValue(1, $c->getNome());

            $stmt2->execute();

            $resultado = $stmt2->fetchAll(PDO::FETCH_ASSOC);

            foreach($resultado as $c):
                echo $c['id_cliente'];
            endforeach;
                
            $sql = "INSERT INTO cliente_info (id_clien, email, senha) VALUES (?,?,?)";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(2, $email);
            $stmt->bindValue(3, $senha);
            $stmt->bindValue(1, $c['id_cliente']);

            $stmt->execute();
        }catch(Exception $e){
            echo 'ERRO: ', $e->getMessage();
            header('Location: ../../');
        }
    }

    public function read($email){
        try{
            $sql = 'SELECT id_cliente, nome, email, senha FROM cliente, cliente_info WHERE email=? AND id_clien=id_cliente';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $email);
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

    public function update($id, $menu, $update){
        try{    
            if($menu == 'alterarnome'):
                $sql = 'UPDATE cliente SET nome = ? WHERE id_cliente=?';
            
                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $update);
                $stmt->bindValue(2, $id);

                $stmt->execute();
                
                return 0;
            
            elseif($menu == 'alteraremail'):
                $sql = 'UPDATE cliente_info SET email = ? WHERE id_clien = ?';
                
                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $update);
                $stmt->bindValue(2, $id);

                $stmt->execute();

                return 0;

            elseif($menu == 'alterarsenha'):
                $sql = 'UPDATE cliente_info SET senha = ? WHERE id_clien = ?';
                    
                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $update);
                $stmt->bindValue(2, $id);

                $stmt->execute();

                return 0;

            else:
                return 1;
            
            endif;
        }catch(Exception $e){
            echo 'ERRO: ', $e->getMessage();
            header('Location: ../../');
        }
    }

    public function delete($id){
        try{
            $sql = 'DELETE FROM cliente WHERE id_cliente = ?';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }catch(Exception $e){
            echo 'ERRO: ', $e->getMessage();
            header('Location: ../../');
        }
    }
}
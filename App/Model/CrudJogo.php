<?php

require_once ('C:/wamp64/www/projects.com/ArcadeGames/Entities/Jogo.php');

class CrudJogo {

    public function read(){
        try{
            $sql = 'SELECT DISTINCT id_produto, nome, quantidade, preco, descricao, desconto, imagemURL
                    FROM jogo, descricao_jogo WHERE id_prod = id_produto';

            $stmt = Conexao::getConn()->prepare($sql);
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

    public function readById(Jogo $j){
        try{
            $sql = 'SELECT DISTINCT id_produto, nome, quantidade, preco, descricao, desconto, imagemURL
                    FROM jogo, descricao_jogo WHERE id_prod = id_produto and id_prod = ?';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $j->getId());
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

    public function readByName($name){
        try{
            $sql = 'SELECT DISTINCT id_prod FROM descricao_jogo WHERE nome = ?';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $name);
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
}
<?php

session_start();

require_once 'CrudJogo.php';
require_once 'CrudCliente.php';
require_once 'CrudVenda.php';

class Conexao
{
    private static $instance;

    public static function getConn(){
        try{
            if (!isset(self::$instance)):
                self::$instance = new PDO('mysql:host=localhost;dbname=arcadegames;charset=utf8', 'root', '');
            endif;

            return self::$instance;
        }catch(Exception $e){
            echo 'ERRO: ', $e->getMessage();
            header('Location: ../../');
        }  
    }
}

<?php
    try{
        require_once('Conexao.php');
        
        if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

            $conexao = new Conexao();
            $usuario = new Cliente();

            if(isset($_POST['login'])){
                $usuario->setEmail(addslashes($_POST['email']));
                $usuario->setSenha(md5($_POST['senha']));
            }

            $sql = "SELECT email, senha FROM cliente_info WHERE email = ? AND senha = ?";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $usuario->getEmail());
            $stmt->bindValue(2, $usuario->getSenha());
            $stmt->execute();

            if($stmt->rowCount() > 0):
                $_SESSION['email'] = $usuario->getEmail();
                $_SESSION['senha'] = $usuario->getSenha();
                $log = true;
            else:
                $log = false;
            endif;

            
            if($log == true){
                if(isset($_SESSION['email']) && isset($_SESSION['senha'])){
                    header('Location: ../../index.php');
                }
            }else{
                header('Location: ../../login-page.php');
            }
        }else{
            header("Location: ../../login-page.php");
        }
    }catch(Exception $e){
        echo 'ERRO: ', $e->getMessage();
        header('Location: ../../');
    }
?>
<?php
    try{
        include_once 'Conexao.php';

        $usuario = new Cliente();
        $crudUsuario = new CrudCliente();
                
        foreach($crudUsuario->read($_SESSION['email']) as $usuario):
            $id_usu = $usuario['id_cliente'];
            $nome_usu = $usuario['nome'];
            $email_usu = $usuario['email'];
            $senha_usu = $usuario['senha'];
        endforeach;

        if($_GET['acao'] =='alterarnome'):

            $Update = $_GET['novoValor'];

            $crudUsuario->update($id_usu,'alterarnome', $Update);

            header('Location: ../../');
            
        elseif($_GET['acao'] =='alterarsenha'):

            $Update = $_GET['novoValor'];

            $crudUsuario->update($id_usu,'alterarsenha', $Update);

            header('Location: ../../');

        elseif($_GET['acao'] =='alteraremail'):

            $Update = $_GET['novoValor'];

            $crudUsuario->update($id_usu,'alteraremail', $Update);

            $_SESSION['email'] = $Update;

            header('Location: ../../');

        elseif($_GET['acao'] =='excluirconta'):
            

            $crudUsuario->delete($id_usu);

            require_once 'Logout.php';

        endif;
    }catch(Exception $e){
        echo 'ERRO: ', $e->getMessage();
        header('Location: ../../');
    }
?>

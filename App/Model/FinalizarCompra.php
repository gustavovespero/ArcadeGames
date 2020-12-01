<?php
    try{
        require_once 'Conexao.php';

        $venda = new Venda();
        $crudVenda=new CrudVenda();
        $id_usu = $crudVenda->createVenda($_SESSION['email']);

        $hoje = date('Y/m/d');

        foreach($crudVenda->readIdVenda($id_usu, $hoje) as $venda):
            $id_venda = $venda['id_venda'];
        endforeach;

        foreach($_SESSION['carrinho'] as $key => $value){
            $crudVenda->createJogoVenda($value['nome'],$value['quantidade'],$id_venda);
        }

        header('Location: ../../');
    }catch(Exception $e){
        echo 'ERRO: ', $e->getMessage();
        header('Location: ../../');
    }
?>
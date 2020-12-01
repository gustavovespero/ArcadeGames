<?php
    require_once('Conexao.php');
    try{
        $idProduto = $_GET['idProduto'];
        
        if(isset($_SESSION['carrinho'][$idProduto])){
            $_SESSION['carrinho'][$idProduto]['quantidade']++;
            header('Location: ../../index.php');
        }else{
            $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1, 'nome'=>$_GET['nome'], 'preco'=>$_GET['preco']);
            header('Location: ../../index.php');
        }
    }catch(Exception $e){
        echo 'ERRO: ', $e->getMessage();
        header('Location: ../../');
    }
?>
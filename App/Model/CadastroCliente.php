<?php

    include_once('Conexao.php');
    try{
        if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) ):
            //header('Location: /ArcadeGames/cadastro-cliente-page.php');
            echo "<script language='javascript' type='text/javascript'>
            alert('Preencha todos os campos para fazer o cadastro!');
            window.location.href='/ArcadeGames/cadastro-cliente-page.php'</script>";
            exit();
        endif;

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        
        $cliente = new Cliente();
        $cliente->setNome($nome);
        $cliente->setEmail($email);
        $cliente->setSenha($senha);

        $cadastro = new CrudCliente();
        $cadastro->create($cliente);

        header('Location: ../../../ArcadeGames/login-page.php');
    }catch(Exception $e){
        echo 'ERRO: ', $e->getMessage();
        header('Location: ../../');
    }   
?>
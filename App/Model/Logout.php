<?php
    try{
        session_start();
        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        header('Location: ../../../ArcadeGames/index.php');
    }catch(Exception $e){
        echo 'ERRO: ', $e->getMessage();
        header('Location: ../../');
    }
?>
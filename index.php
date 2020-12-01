<?php 
    require_once 'App/Model/Conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <?php        
        $pagina = 'home-page.php';

        if(!empty($_GET['pagina'])){
            $pagina = $_GET('pagina');
        }
        if(file_exists("home-page.php")){
            include("home-page.php");
        }
        else{
            ?> <h1>Desculpe! Página não encontrada!</h1> <?php
        }        
    ?>
</body>
</html>
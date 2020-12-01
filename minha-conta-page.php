<?php
    require_once 'App/Model/Conexao.php';
    require_once 'Includes/nav.php';

    if(isset($_SESSION['email']) && !empty($_SESSION['email']) && isset($_SESSION['senha']) && !empty($_SESSION['senha'])):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="secao-principal">
        <section class="secao-minha-conta">
            <h1>Meus Dados:</h1>
            <div>
                <p>Nome: <?php echo $nome ?></p>
                <p>E-mail: <?php echo $_SESSION['email'] ?></p>
                <p>ID: <?php echo $id ?></p>
            </div>
            <div class="menu-basico">
                <li><a href="Includes/formMudaNome.php?acao=alterarnome">Editar meu nome</a></li>
                <li><a href="Includes/formMudaNome.php?acao=alterarsenha">Alterar minha senha</a></li>
                <li><a href="Includes/formMudaNome.php?acao=alteraremail">Mudar meu e-mail</a></li>
                <li><a href="App/Model/edicao-usuario.php?acao=excluirconta">Excluir minha conta</a></li>
            </div>
    </section>
</body>
</html>
<?php
    else:
        header('Location: login-page.php');
    endif;
?>
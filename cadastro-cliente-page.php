<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php require_once 'Includes/nav.php' ?>
    </header>
    
    <section id="secao-principal">
        <form class="form" action="App/Model/CadastroCliente.php" method="POST">
            <img src="images/logo 1.jpg" alt="Arcade Games" width="100px">
            <h1>Cadastro</h1>
            <p>Preencha os campos para criar sua conta</p>
            
            <div>
                <input type="text" name="nome" placeholder="Nome">
            </div>
            </br>
            <div>
                <input type="email" name="email" placeholder="Email">
            </div>
            </br>
            <div>
                <input type="password" name="senha" placeholder="Senha">
            </div>
            <br>
            <div>
                <button class="btn verde-vivo" type="submit" name="cadastro">Cadastrar</button>
                <p>Já possui uma conta? Realize seu login <a href="login-page.php">aqui</a></p>
            </div>
        </form>
    </section>
    
    <?php require_once 'Includes/footer.php' ?>

</body>
<?php 
    require_once 'App/Model/Conexao.php';
?>
<nav>
    <div class="logo">
        <a href="index.php"><img src="images/logo 2 50px.png" alt="Arcade Games"></a>
    </div>
    <div class="pesquisa">
        <input type="search" placeholder="Procurar na loja">
        <a href="#Pesquisa" id="botao-pesquisa"><img src="images/botao-pesquisa.png" alt="Buscar"></a>
    </div>
    <div class="menu">
        <ul class="nivel-um">
            <li><a href="#categorias">Categorias</a></li>
            <li><a href="#contato">Contato</a></li>
            <li><a href="#sobre">Sobre</a></li>
        </ul>
    </div>
    <div id="icone-carrinho">
        <a href="/ArcadeGames/cart-page.php"><img src="images/cartIcon.png"></img></a>
    </div>
    <?php 
        if(isset($_SESSION['email']) && !empty($_SESSION['email']) && isset($_SESSION['senha']) && !empty($_SESSION['senha'])):
            $usuario = new Cliente();
            $crudUsuario = new CrudCliente();
            
            foreach($crudUsuario->read($_SESSION['email']) as $usuario):
                $id = $usuario['id_cliente'];
                $nome = $usuario['nome'];
            endforeach;
    ?>
    <div class="menu-usuario-nav">
        <p>Olá, <?php echo $nome ?>!</p>
        <a href="minha-conta-page.php">Minha conta</a>
        <a href="App/Model/Logout.php">Sair</a>
    </div>
    <?php            
        else:
    ?>
    <div class="botao-login">
        <a href="login-page.php" >
            Login
        </a>
    </div>
        <?php endif; ?>
</nav>
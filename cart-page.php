<?php 
    require_once 'App/Model/Conexao.php';
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcade Games</title>
    <link rel="stylesheet" href="style.css">
    <script src="script"></script>
</head>

<body>
    <header>
        <?php require_once 'Includes/nav.php' ?>
    </header>
    
    <section id="secao-principal">
        <section class="cart-section">
            <!--<img src="images/cart.jpg" alt="carrinho de compras">-->
            <div class="info-carrinho">
                <h1>Carrinho de Compras</h1>
                <?php if(isset($_SESSION['carrinho'])):
                ?>
                <table class="tabela-carrinho">
                    <tr class="bg-black">
                        <td>Produto</td>
                        <td>Quantidade</td>
                        <td>Preço</td>
                    </tr>
                    <?php 
                    $precoTotal = 0.0;
                    foreach($_SESSION['carrinho'] as $key => $value){?>
                        <tr>
                            <td><?php echo $value['nome']; ?></td>
                            <td><?php echo $value['quantidade']; ?></td>
                            <td><?php echo $value['preco'];?>0</td>
                        </tr>
                    <?php 
                        $precoTotal = $precoTotal + ($value['quantidade'] * $value['preco']);
                    } 
                    ?>
                </table>
                <div id="preco-total">
                    Total: R$ <?php echo $precoTotal; ?>0
                </div>
                <?php else:?>
                    <p>Seu carrinho está vazio. Continue comprando para encontrar o seu jogo!</p>
                <?php
                endif; ?>
                
                <a class="btn red" href="App/Model/FinalizarCompra.php">Finalizar Compra</a>
                <a class="btn verde-vivo" href="/ArcadeGames">Continuar Comprando</a>
            </div>
        </section>
    </section>
    
    <?php require_once 'Includes/footer.php' ?>
    
</body>

</html>
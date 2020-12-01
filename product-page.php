<!DOCTYPE html>
<html lang="pt-br">
    <?php         
        require_once 'Entities/Jogo.php';
        require_once 'App/Model/Conexao.php';

        $idProduto = $_GET['idProduto'];
        
        $produto = new Jogo();
        $produto->setId($idProduto);

        $crudp = new CrudJogo();

        foreach($crudp->readById($produto) as $produto):
            $descricao = $produto['descricao'];
            $quantidade = $produto['quantidade'];
            $preco = $produto['preco'];
            $nomeJogo = $produto['nome'];
            $imagemURL = $produto['imagemURL'];
        endforeach;
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomeJogo; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php 
            require_once 'Includes/nav.php';
            require_once 'Includes/slider.php';
        ?>
    </header>
    <section id="secao-principal">
        <div class="game-section">
            <div>
                <img class="produto-img" src="<?php echo $imagemURL; ?>" alt="<?php echo $nomeJogo; ?>">
            </div>
            <div>
                <h1 class="titulo-grande"><?php echo $nomeJogo; ?></h1>
                <h2>Preço: <?php echo $preco; ?>0</h2>
                <?php if($quantidade < 3):?>
                    <table>
                        <td class="red">Últimas unidades:</td>
                        <td class="quantidade red"><?php echo $quantidade; ?></td>
                    </table>
                <?php endif;?>
                <br>
                <a class="btn red" href="App/Model/Adicionar.php?idProduto=<?php echo $idProduto;?>&nome=<?php echo $produto['nome'];?>&preco=<?php echo $preco;?>">Comprar</a>
                <p><?php echo $descricao; ?></p>
            </div>
        </div>
    
        <div >
            <h2>APROVEITE</h2>
            <?php
                require_once 'includes/product.php';
            ?>
        </div>
    </section>
    
    <?php require_once 'Includes/footer.php'; ?>
    
</body>

</html>
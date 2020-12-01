<?php
    
    include_once 'Entities/Jogo.php';
    include_once 'App/Model/Conexao.php';

    $produto = new Jogo();
    $produto1 = new Jogo();
    $produto2 = new Jogo();
    $produto3 = new Jogo();
    $produto->setId(1);
    $produto1->setId(2);
    $produto2->setId(3);
    $produto3->setId(4);

    $crudp = new CrudJogo();

    foreach($crudp->readById($produto) as $produto):
        $id = $produto['id_produto'];
        $quantidade = $produto['quantidade'];
        $preco = $produto['preco'];
        $nome = $produto['nome'];
        $imagemURL = $produto['imagemURL'];
    endforeach;

    foreach($crudp->readById($produto1) as $produto1):
        $id1 = $produto1['id_produto'];
        $quantidade1 = $produto1['quantidade'];
        $preco1 = $produto1['preco'];
        $nome1 = $produto1['nome'];
        $imagemURL1 = $produto1['imagemURL'];
    endforeach;

    foreach($crudp->readById($produto2) as $produto2):
        $id2 = $produto2['id_produto'];
        $quantidade2 = $produto2['quantidade'];
        $preco2 = $produto2['preco'];
        $nome2 = $produto2['nome'];
        $imagemURL2 = $produto2['imagemURL'];
    endforeach;

    foreach($crudp->readById($produto3) as $produto3):
        $id3 = $produto3['id_produto'];
        $quantidade3 = $produto3['quantidade'];
        $preco3 = $produto3['preco'];
        $nome3 = $produto3['nome'];
        $imagemURL3 = $produto3['imagemURL'];
    endforeach;
?>

<div class="mais-vendidos">
    <div class="produto">
        <a href="product-page.php?idProduto=1">
            <img src="<?php echo $imagemURL; ?>" alt="<?php echo $nome; ?>">
        </a>
        <h2><a href="product-page.php?idProduto=1"><?php echo $nome; ?></a></h2>
        <h3><a href="product-page.php?idProduto=1">Preço: <?php echo $preco; ?>0</a></h3>
    </div>
    <div class="produto">
        <a href="product-page.php?idProduto=2">
            <img src="<?php echo $imagemURL1; ?>" alt="<?php echo $nome1; ?>">
        </a>
        <h2><a href="product-page.php?idProduto=2"><?php echo $nome1; ?></a></h2>
        <h3><a href="product-page.php?idProduto=2">Preço: <?php echo $preco1; ?>0</a></h3>
    </div>
    <div class="produto">
        <a href="product-page.php?idProduto=3">
            <img src="<?php echo $imagemURL2; ?>" alt="<?php echo $nome2; ?>">
        </a>
        <h2><a href="product-page.php?idProduto=3"><?php echo $nome2; ?></a></h2>
        <h3><a href="product-page.php?idProduto=3">Preço: <?php echo $preco2; ?>0</a></h3>
    </div>
    <div class="produto">
        <a href="product-page.php?idProduto=4">
            <img name='imagemURL' src="<?php echo $imagemURL3; ?>" alt="<?php echo $nome3; ?>">
        </a>
        <h2><a name='nome' href="product-page.php?idProduto=4"><?php echo $nome3; ?></a></h2>
        <h3><a name= 'preco' href="product-page.php?idProduto=4">Preço: <?php echo $preco3; ?>0</a></h3>
    </div>
</div>
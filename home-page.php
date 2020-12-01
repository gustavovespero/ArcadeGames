<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcade Games</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <?php require_once 'Includes/nav.php'; ?>
        <?php require_once 'Includes/slider.php'; ?>
    </header>

    <section id="secao-principal">
        <div class="ver-mais-e-mais-vendidos">
            <h2>LANÇAMENTOS</h2>
            <a href="#Ver-mais">VER MAIS</a>
        </div>
        <div>
            <?php
                include_once('Includes/product.php');
            ?>
        </div>
    </section>
    
    <?php require_once 'Includes/footer.php'; ?>

</body>

</html>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <header>
        <?php 
            require_once 'Includes/nav.php';
        ?>
    </header>

    <section id="secao-principal">
        <?php 
            require_once 'Includes/formLogin.php';
        ?>
        
    </section>
    
    <?php require_once 'Includes/footer.php' ?>
</body>
</html>
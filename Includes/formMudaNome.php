<?php
    $acao = $_GET['acao'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body> 
    <session class="sessao-principal">
        
        <div class="form">
            <img src="../images/logo 1.jpg" alt="Arcade Games" width="100px">
            <h1>Insira um novo valor para alteração:</h1>
            <form class="formulario" method="GET" action="../App/Model/edicao-usuario.php">
                Novo valor:
                <input type="text" name="novoValor" id="novoValor">
                Parâmetro:
                <input type="text" name="acao" value="<?php echo $acao?>" readonly>
                <br>
                <button class="btn verde-vivo" type="submit" value="Alterar">Alterar</button>
                <a href="../" class="btn red">Cancelar</a>
            </form>
        </div>
    </session>
</body>

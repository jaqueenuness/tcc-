<?php include('config/config.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Correntes em Pratas</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="<?php echo SITEURL; ?>home.php"> Hengon Silver </a>
        </div>

        <ul>
            <li> <a href="<?php echo SITEURL; ?>home.php"> Home </a> </li>
            <li> <a href="<?php echo SITEURL; ?>index2.php"> Sobre </a> </li>
            <li> <a href="<?php echo SITEURL; ?>produtos.php"> Preços </a> </li>
            <li> <a href="<?php echo SITEURL; ?>carrinho.php"> Suas Compras </a> </li>
            <li> <a href="<?php echo SITEURL; ?>index1.php"> Contato </a> </li>
        </ul>
    </nav>s

    <section class="banner">
        <div class="texto">
           <h1 class="titulo">Celebre a vida com uma joia que combine com você.</h1>
           <h2 class="sub_titulo">Adquira aqui na Hengon Silver.</h2>
           <div class="botoes">
               <a href="<?php echo SITEURL; ?>produtos.php" class="adquirir">Adquirir</a>
           </div>
        </div>
    </section>
</body>
</html>

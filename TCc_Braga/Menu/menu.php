<?php
// Exibir erros temporariamente (remover em produção)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir configurações
require_once(__DIR__ . '/../config/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- ... restante do cabeçalho ... -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
    <title>Correntes em Pratas</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="<?php echo BASE_URL; ?>/index.php"> Hengon Silver </a>
        </div>

        <ul>
            <li> <a href="<?php echo BASE_URL; ?>/pages/index.php"> Home </a> </li>
            <li> <a href="<?php echo BASE_URL; ?>/pages/index2.php"> Sobre </a> </li>
            <li> <a href="<?php echo BASE_URL; ?>/pages/produtos.php"> Preços </a> </li>
            <li> <a href="<?php echo BASE_URL; ?>/pages/index3.php"> Suas Compras </a> </li>
            <li> <a href="<?php echo BASE_URL; ?>/pages/index1.php"> Contato </a> </li>
        </ul>
    </nav>

    <section class="banner">
        <div class="texto">
           <h1 class="titulo">Celebre a vida com uma joia que combine com você.</h1>
           <h2 class="sub_titulo">Adquira aqui na Hengon Silver.</h2>
           <div class="botoes">
               <a href="<?php echo BASE_URL; ?>/pages/produtos.php" class="adquirir">Adquirir</a>
           </div>
        </div>
    </section>
</body>
</html>

<?php
include('config/config.php');

session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ... (o restante do código permanece o mesmo)
}

// Consulta SQL para obter todos os produtos
$sql = "SELECT * FROM produtos";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Produtos</title>
</head>
<body>

    <?php
    // Exibe a mensagem, se existir
    if (isset($mensagem)) {
        echo '<p>' . $mensagem . '</p>';
    }

    // Loop para exibir cada produto
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="product-container">
                <div class="product">
                    <img src="' . $row['imagem'] . '" alt="Product Image">
                    <h2>' . $row['nome'] . '</h2>
                    <p>' . $row['descricao'] . '</p>
                    <p class="price">R$' . number_format($row['preco'], 2, ',', '.') . '</p>
                    
                    <!-- Adiciona um formulário para o botão Adicionar ao Carrinho -->
                    <form method="post">
                        <input type="hidden" name="produto_id" value="' . $row['id'] . '">
                        <label for="quantidade">Quantidade:</label>
                        <input type="number" name="quantidade" value="1" min="1" max="10">
                        <button type="submit" name="adicionar" class="buy-btn">Adicionar ao Carrinho</button>
                    </form>
                </div>
              </div>';
    }

    // Exibe o carrinho
    echo '<div id="carrinho">
            <h2>Seu Carrinho</h2>
            <ul>';

    // Loop para exibir cada item no carrinho
    foreach ($_SESSION['carrinho'] as $index => $item) {
        // Adiciona verificações para evitar "Undefined array key"
        $nome = isset($item['nome']) ? $item['nome'] : '';
        $preco = isset($item['preco']) ? $item['preco'] : '';

        echo '<li>
                <span>' . $nome . ' - R$' . number_format($preco, 2, ',', '.') . ' - Quantidade: ' . $item['quantidade'] . '</span>
                
                <!-- Adiciona formulários para os botões Remover, Aumentar e Diminuir -->
                <form method="post">
                    <input type="hidden" name="item_index" value="' . $index . '">
                    <button type="submit" name="remover">Remover</button>
                </form>
                
                <form method="post">
                    <input type="hidden" name="item_index" value="' . $index . '">
                    <label for="nova_quantidade">Nova Quantidade:</label>
                    <input type="number" name="nova_quantidade" value="' . $item['quantidade'] . '" min="1" max="10">
                    <button type="submit" name="atualizar">Atualizar</button>
                </form>
              </li>';
    }

    echo '</ul>
        </div>';

    // Adiciona o formulário para o botão Finalizar Pedido
    echo '<form method="post">
            <button type="submit" name="finalizar">Finalizar Pedido</button>
          </form>';
    ?>

</body>
</html>

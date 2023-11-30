<?php
include('config/config.php');

session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o botão Adicionar ao Carrinho foi pressionado
    if (isset($_POST['adicionar'])) {
        $produto_id = $_POST['produto_id'];
        $quantidade = isset($_POST['quantidade']) ? (int)$_POST['quantidade'] : 1;

        // Consulta SQL para obter os detalhes do produto
        $sqlProduto = "SELECT * FROM produtos WHERE id = $produto_id";
        $resultProduto = mysqli_query($conn, $sqlProduto);

        if ($resultProduto) {
            $produto = mysqli_fetch_assoc($resultProduto);

            // Adiciona o produto ao carrinho na sessão
            $carrinhoItem = [
                'produto_id' => $produto['id'],
                'quantidade' => $quantidade,
                'nome' => $produto['nome'],
                'preco' => $produto['preco']
            ];

            $_SESSION['carrinho'][] = $carrinhoItem;

            // Exibe uma mensagem de sucesso
            $mensagem = "Produto adicionado ao carrinho com sucesso!";
        } else {
            // Exibe uma mensagem de erro se a consulta falhar
            $mensagem = "Erro ao adicionar o produto ao carrinho.";
        }
    }
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
    <title>Carrinho</title>
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
    foreach ($_SESSION['carrinho'] as $item) {
        echo '<li>
                <span>' . $item['nome'] . ' - R$' . number_format($item['preco'], 2, ',', '.') . '</span>
              </li>';
    }

    echo '</ul>
        </div>';
    ?>

</body>
</html>

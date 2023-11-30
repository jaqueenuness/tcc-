<?php
include('config/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['produto_id'])) {
    $produto_id = $_POST['produto_id'];
    // Lógica para adicionar o produto ao carrinho no banco de dados
    $query = "INSERT INTO carrinho (produto_id, quantidade) VALUES ($produto_id, 1)";
    mysqli_query($conexao, $query);

    // Lógica para recuperar e exibir o carrinho atualizado
    $query_carrinho = "SELECT * FROM carrinho INNER JOIN produtos ON carrinho.produto_id = produtos.id";
    $resultado_carrinho = mysqli_query($conexao, $query_carrinho);

    while ($linha = mysqli_fetch_assoc($resultado_carrinho)) {
        echo "<li>{$linha['nome']} - Quantidade: {$linha['quantidade']}</li>";
    }
}
?>

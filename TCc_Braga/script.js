function adicionarProduto(produtoId) {
  // Lógica para enviar uma solicitação AJAX para adicionar o produto ao carrinho no banco de dados
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // Lógica para atualizar dinamicamente o carrinho na página
      var listaCarrinho = document.getElementById("lista-carrinho");
      listaCarrinho.innerHTML = xhr.responseText;
    }
  };
  xhr.open("POST", "adicionar_carrinho.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("produto_id=" + produtoId);
}

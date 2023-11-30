// Array para armazenar os produtos selecionados
var carrinho = [];

// Função para adicionar um produto ao carrinho
function adicionarProduto(id) {
  var produto = "Item " + id;
  carrinho.push(produto);

  // Atualiza a lista de produtos no carrinho
  atualizarCarrinho();
}

// Função para atualizar a lista de produtos no carrinho
function atualizarCarrinho() {
  var listaCarrinho = document.getElementById("lista-carrinho");
  listaCarrinho.innerHTML = "";

  for (var i = 0; i < carrinho.length; i++) {
    var produto = carrinho[i];

    var li = document.createElement("li");
    li.appendChild(document.createTextNode(produto));

    listaCarrinho.appendChild(li);
  }
}
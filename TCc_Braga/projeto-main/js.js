const product = [
  {
    name: 'Product Name 1',
    description: 'Product Description 1',
    price: 100,
    image: 'product-image-1.jpg',
  },
  {
    name: 'Product Name 2',
    description: 'Product Description 2',
    price: 200,
    image: 'product-image-2.jpg',
  },
];

const productcontainer = document.querySelectorAll('.product-container');

for (let i = 0; i < productcontainer.length; i++) {
  let product = products[i];
  let productDiv = productcontainer[i].querySelector('.product');
  let productImg = productDiv.querySelector('img');
  let productName = productDiv.querySelector('h2');
  let productDesc = productDiv.querySelector('p:nth-of-type(1)');
  let productPrice = productDiv.querySelector('p.price');
  let buyBtn = productDiv.querySelector('.buy-btn');

  productImg.src = product.image;
  productImg.alt = product.name;
  productName.textContent = product.name;
  productDesc.textContent = product.description;
  productPrice.textContent = `$${product.price}`;

  buyBtn.addEventListener('click', () => {
    alert(`You have bought ${product.name} for $${product.price}`);
  });

}const products = [
    {
      name: 'Product Name 1',
      description: 'Product Description 1',
      Add files via upload
      2 weeks ago
      
      price: 100,</script>
    {
      name: 'Product Name 2',
      description: 'Product Description 2',
      price: 200,
      image: 'product-image-2.jpg',
    },
  ];
  
  const productContainer = document.querySelectorAll('.product-container');
  
  for (let i = 0; i < productContainer.length; i++) {
    let product = products[i];
    let productDiv = productContainer[i].querySelector('.product');
    let productImg = productDiv.querySelector('img');
    let productName = productDiv.querySelector('h2');
    let productDesc = productDiv.querySelector('p:nth-of-type(1)');
    let productPrice = productDiv.querySelector('p.price');
    let buyBtn = productDiv.querySelector('.buy-btn');
  
    productImg.src = product.image;
    productImg.alt = product.name;
    productName.textContent = product.name;
    productDesc.textContent = product.description;
    productPrice.textContent = `$${product.price}`;
  
    buyBtn.addEventListener('click', () => {
      alert(`You have bought ${product.name} for $${product.price}`);
    });
  }
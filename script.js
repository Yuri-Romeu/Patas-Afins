const addToCartButtons = document.querySelectorAll('.add-to-cart');
const removeFromCartButtons = document.querySelectorAll('.remove-from-cart');
const cartCount = document.getElementById('cart-count');
const cartTotal = document.getElementById('cart-total');
const cartItems = {};
let itemCount = 0;
let total = 0;

addToCartButtons.forEach((button, index) => {
     button.addEventListener('click', () => {
          const produto = button.closest('.produto');
          const productId = produto.id;
          const priceElement = produto.querySelector('.preco');
          const preco = parseFloat(priceElement.innerText.replace('R$ ', '').replace(',', '.'));

          itemCount++;
          total += preco;

          if (!cartItems[productId]) {
               cartItems[productId] = 1;
          } else {
               cartItems[productId]++;
          }

          cartCount.innerText = itemCount;
          cartTotal.innerText = `Total: R$ ${total.toFixed(2).replace('.', ',')}`;

          removeFromCartButtons[index].style.display = 'block';
     });
});

removeFromCartButtons.forEach((button, index) => {
     button.addEventListener('click', () => {
          const produto = button.closest('.produto');
          const productId = produto.id;

          if (cartItems[productId]) {
               const priceElement = produto.querySelector('.preco');
               const preco = parseFloat(
                    priceElement.innerText.replace('R$ ', '').replace(',', '.'),
               );

               itemCount--;
               total -= preco;

               cartItems[productId]--;

               if (cartItems[productId] <= 0) {
                    removeFromCartButtons[index].style.display = 'none';
               }

               if (itemCount <= 0) {
                    itemCount = 0;
                    total = 0;
                    cartCount.innerText = itemCount;
                    cartTotal.innerText = `Total: R$ ${total.toFixed(2).replace('.', ',')}`;
               } else {
                    cartCount.innerText = itemCount;
                    cartTotal.innerText = `Total: R$ ${total.toFixed(2).replace('.', ',')}`;
               }
          }
     });
});

//mostrar mais informaçoes
function showDiv2() {
     const div2 = document.querySelector('.mais-informaçoes');
     div2.style.display = 'block';
}

function hideDiv2() {
     const div2 = document.querySelector('.mais-informaçoes');
     div2.style.display = 'none';
}

function showDiv3() {
     const div3 = document.querySelector('.mais-info-buy');
     div3.style.display = 'block';
}

function hideDiv3() {
     const div3 = document.querySelector('.mais-info-buy');
     div3.style.display = 'none';
}

const toggleButton = document.getElementById('toggleButton');
const myDiv = document.getElementById('myDiv');

toggleButton.addEventListener('click', function () {
     if (myDiv.style.display === 'none') {
          myDiv.style.display = 'block';
     } else {
          myDiv.style.display = 'none';
     }
});

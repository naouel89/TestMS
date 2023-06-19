// Récupération des éléments HTML
const productCheckboxes = document.querySelectorAll('.product-checkbox');
const addToCartButton = document.querySelector('.add-to-cart');
const cartItemsContainer = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');
const paymentModal = document.getElementById('payment-modal');
const paymentForm = document.getElementById('payment-form');
const confirmPaymentButton = document.getElementById('confirm-payment-btn');
const validationModal = document.getElementById('validation-modal');
const customerNameSpan = document.getElementById('customer-name');
const customerPhoneSpan = document.getElementById('customer-phone');
const customerEmailSpan = document.getElementById('customer-email');
const customerAddressSpan = document.getElementById('customer-address');
const paymentMethodSpan = document.getElementById('payment-method');
const cardNumberSpan = document.getElementById('card-number');

// Écouteur d'événement pour le bouton "Ajouter les produits sélectionnés au panier"
addToCartButton.addEventListener('click', () => {
  const selectedProducts = Array.from(productCheckboxes)
    .filter(checkbox => checkbox.checked)
    .map(checkbox => checkbox.parentNode);

  if (selectedProducts.length === 0) {
    alert('Veuillez sélectionner au moins un produit.');
    return;
  }

  cartItemsContainer.innerHTML = '';
  let total = 0;

  selectedProducts.forEach(product => {
    const productName = product.querySelector('h2').innerText;
    const productDescription = product.querySelector('p:nth-child(2)').innerText;
    const productPrice = parseFloat(product.querySelector('p:nth-child(3)').innerText.replace('$', ''));
    const quantity = parseInt(product.querySelector('.quantity input').value);
    const unitPrice = parseFloat(product.querySelector('p:nth-child(5)').innerText.replace('Prix unitaire: $', ''));
    const totalPrice = quantity * unitPrice;

    total += totalPrice;

    const cartItem = document.createElement('li');
    cartItem.innerHTML = `
      <span class="item-name">${productName} (${quantity}x)</span>
      <span class="item-price">$${totalPrice.toFixed(2)}</span>
    `;
    cartItemsContainer.appendChild(cartItem);
  });

  cartTotal.innerText = `Total: $${total.toFixed(2)}`;

  paymentModal.style.display = 'block';
});

// Écouteur d'événement pour le bouton "Confirmer" dans la fenêtre modale des modalités de paiement
confirmPaymentButton.addEventListener('click', () => {
  const name = document.getElementById('name').value;
  const address = document.getElementById('address').value;
  const phone = document.getElementById('phone').value;
  const email = document.getElementById('email').value;
  const paymentMethod = document.getElementById('payment-method').value;
  const cardNumber = document.getElementById('card-number').value;

  if (!name || !address || !phone || !email || !cardNumber) {
    alert('Veuillez remplir tous les champs obligatoires.');
    return;
  }

  customerNameSpan.innerText = name;
  customerPhoneSpan.innerText = phone;
  customerEmailSpan.innerText = email;
  customerAddressSpan.innerText = address;
  paymentMethodSpan.innerText = paymentMethod;
  cardNumberSpan.innerText = cardNumber;

  validationModal.style.display = 'block';
  paymentModal.style.display = 'none';
});

// Fermer la fenêtre modale lorsqu'on clique en dehors de celle-ci
window.addEventListener('click', (event) => {
  if (event.target === paymentModal) {
    paymentModal.style.display = 'none';
  } else if (event.target === validationModal) {
    validationModal.style.display = 'none';
  }
});

// Fermer la fenêtre modale lorsqu'on appuie sur le bouton "Fermer"
document.querySelectorAll('.close').forEach(closeButton => {
  closeButton.addEventListener('click', () => {
    paymentModal.style.display = 'none';
    validationModal.style.display = 'none';
  });
});
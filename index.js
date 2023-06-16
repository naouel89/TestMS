var cartItems = [];

// Gérer l'ajout au panier
document.getElementById('add-to-cart').addEventListener('click', function() {
  var product = {
    name: 'Nom du produit',
    price: 'X'
  };

  cartItems.push(product);
  updateCart(); // Mettre à jour l'affichage du panier
});

// Gérer la suppression d'un article du panier
document.getElementById('cart-items').addEventListener('click', function(event) {
  if (event.target.classList.contains('remove-btn')) {
    var index = event.target.getAttribute('data-index');
    cartItems.splice(index, 1);
    updateCart(); // Mettre à jour l'affichage du panier
  }
});

// Gérer la suppression de tous les articles du panier
document.getElementById('clear-cart').addEventListener('click', function() {
  cartItems = [];
  updateCart(); // Mettre à jour l'affichage du panier
});

// Gérer l'annulation de la commande
document.getElementById('cancel-order').addEventListener('click', function() {
  cartItems = [];
  updateCart(); // Mettre à jour l'affichage du panier
});

// Gérer le clic sur le bouton de paiement
document.getElementById('checkout-btn').addEventListener('click', function() {
  // Ouvrir la fenêtre modale des modalités de paiement
  document.getElementById('payment-modal').style.display = 'block';
});

// Gérer la soumission du formulaire de paiement
document.getElementById('confirm-payment-btn').addEventListener('click', function() {
  var name = document.getElementById('name').value;
  var address = document.getElementById('address').value;
  var phone = document.getElementById('phone').value;

  // Effectuer un traitement supplémentaire ou envoyer les données au serveur

  // Réinitialiser le formulaire de paiement
  document.getElementById('payment-form').reset();

  // Fermer la fenêtre modale des modalités de paiement
  document.getElementById('payment-modal').style.display = 'none';

  // Afficher la fenêtre modale de validation de la commande
  document.getElementById('validation-modal').style.display = 'block';
});

// Mettre à jour l'affichage du panier
function updateCart() {
  var cartItemsElement = document.getElementById('cart-items');
  cartItemsElement.innerHTML = '';

  for (var i = 0; i < cartItems.length; i++) {
    var item = cartItems[i];

    var listItem = document.createElement('li');
    listItem.className = 'list-group-item cart-item';
    listItem.innerHTML = `
      <span>${item.name} - $${item.price}</span>
      <button class="btn btn-link remove-btn" data-index="${i}">Supprimer</button>
    `;

    cartItemsElement.appendChild(listItem);
  }
}
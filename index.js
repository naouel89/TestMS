const panierListe = document.getElementById('panier-liste');
let total = 0;

function ajouterAuPanier(nomPlat, prixPlat) {
  const quantite = 1;
  ajouterAuPanierCustom(nomPlat, prixPlat, quantite);
}

function ajouterAuPanierCustom() {
  const selectPlat = document.getElementById('choix');
  const quantiteInput = document.getElementById('quantite');

  const nomPlat = selectPlat.value;
  const prixPlat = parseFloat(selectPlat.options[selectPlat.selectedIndex].text.split('-')[1]);
  const quantite = parseInt(quantiteInput.value);

  const montant = prixPlat * quantite;
  total += montant;

  const panierItem = document.createElement('li');
  panierItem.textContent = `${nomPlat} - ${prixPlat}$ x ${quantite} = ${montant}$`;

  panierListe.appendChild(panierItem);

  document.getElementById('total').textContent = `Total: ${total}$`;

  quantiteInput.value = 1;
  selectPlat.selectedIndex = 0;
}

function validerCommande() {
  // Logique pour valider la commande (côté serveur)
  alert('Commande validée !');
}

function annulerCommande() {
  // Logique pour annuler la commande (côté client)
  panierListe.innerHTML = '';
  total = 0;
  document.getElementById('total').textContent = 'Total: 0$';
}

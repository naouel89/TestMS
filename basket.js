function saveBasket(basket) {
    localStorage.setItem("basket", JSON.stringify(basket));
}
function getBasket() {
    
    let basket = localStorage.getItem("basket");
    if (basket == null){
        return [];
    }
    else {
        return JSON.parse(basket);

    }
    }
function addBasket(product) {
    let basket = getBasket();
    basket.push(product);
    saveBasket(basket);
}

function Produit(id, designation, prix) {
    this.id= id;
    this.prix= prix;
    this.designation= designation;
    this.toString= function() {
      return this.designation + " "+ prix;
    }
}

var catalogue= new Array();
catalogue.push(new Produit(1, "ordinateur", 200));
catalogue.push(new Produit(2, "souris", 20));
catalogue.push(new Produit(3, "uniter centrale", 620));
var panier= new Array();


function remplirCatalogue() {
      var cat= document.getElementById('cat');
    for (var i in catalogue) {
        var e= document.createElement("option");
        e.value=i;
          var txt= document.createTextNode(catalogue[i].designation);
          e.appendChild(txt);
        cat.appendChild(e);
    }
}

function ajouterCase(parent, txt) {
var e= document.createElement("td");
e.appendChild(document.createTextNode(txt));
parent.appendChild(e);
}

function calculerTotal() {
var tot= 0;
for (var p in panier) {
    tot+= panier[p].prix;
}
return tot;
}

function ajouter() {
      var cat= document.getElementById('cat');
    var sel= cat.options[cat.selectedIndex].value;
    var prod= catalogue[sel];
    panier.push(prod);
    var ligne= document.createElement("tr");
      ajouterCase(ligne,prod.designation);
      ajouterCase(ligne,prod.prix);
    document.getElementById("pan").appendChild(ligne);
    document.getElementById("tot").innerHTML= calculerTotal();
}



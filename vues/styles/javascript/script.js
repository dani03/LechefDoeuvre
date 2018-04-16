// on utilise le local storage ici pour recuperer les elements du panier par l'utilisateur
// localStorage.setItem("age","20");
// localStorage.setItem('name', 'daniel');
// localStorage.getItem("age");
// console.log(localStorage);




var theButton = document.getElementsByClassName("btn");
  id.onfocus = function(){

    if (theButton.class == "$product_id") {
      alert('hello world');

    }

  }

  theButton.onclick = function(){
    const key = theButton.value;
    const value = add.value;

  }
// key revient ici a ma clé la syntaxe est la suivante localstorage.setItem('key', 'value');
add.onclick = function (){


  console.log(key);
  console.log(value);

  // si la cle et le button ajouter (add) ont été selectionnés alors on les met dans le localstorage plus tard
  // on va rajouter si l'utilisateur n'est pas connecté
  if(key && value)
  {
    localstorage.setItem(key, value);
    // location.reload();
  }
}

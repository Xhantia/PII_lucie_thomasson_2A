// window.addEventListener("submit", function () {
//   // Accède à l'élément form ; s'il est submit, appelle sendData()
//   var form = document.getElementById("form-newsletter").addEventListener("submit", function (event) {
//      //event.preventDefault();
//     sendData();
//     });

//     //Création et envoi des données en asynchrone
//     function sendData() {
//       var FD = new FormData(form);                   // Création d'un FormData lié à l'élément form (y a bien les données dedans)
//       var XHR = new XMLHttpRequest();                // Création de la requête
//       XHR.open("POST", "./newsletter.php");          // Configure la requête
//       XHR.send(JSON.stringify(FD));                                  // Envoie les données que l'utilisateur a mis dans le formulaire
          
//       //Si la soumission a marché
//       XHR.addEventListener("success", function(event) {
//       // document.getElementById('infos-newsletter').innerHTML="Transfert des infos effectué !";
//       alert(FD.getAll());
//       });
      
//       // En cas d'erreur
//       XHR.addEventListener("error", function(event) {
//       alert('Erreur');
//       });
//     }
// });
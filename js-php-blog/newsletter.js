    window.addEventListener("load", function () {
        // Accède à l'élément form
        var form = document.getElementById("form-newsletter");
      
        // Prend en charge l'événement submit - appelle sendData()
        form.addEventListener("submit", function (event) {
          event.preventDefault();
      
          sendData();
        });

        function sendData() {
          var FD = new FormData(form);                   // Création d'un FormData lié à l'élément form (y a bien les données dedans)
          var XHR = new XMLHttpRequest();                // Création de la requête
          XHR.open("POST", "./newsletter.php");          // Configure la requête
          XHR.send(FD);                                  // Envoie les données que l'utilisateur a mis dans le formulaire
          document.getElementById('infos-newsletter').innerHTML=XHR.readyState; 
          
          // Définit ce qui se passe si la soumission s'est opérée avec succès
          // XHR.addEventListener("success", function(event) {
          //   document.getElementById('infos-newsletter').innerHTML="Transfert des infos effectué !";
            // alert(FD.get("newsletter_pseudo"));
          // });
      
          // Definit ce qui se passe en cas d'erreur
          // XHR.addEventListener("error", function(event) {
          //   alert('Oups! Quelque chose s\'est mal passé.');
          // });
        }
      });
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin></script>

<!-- Utilisation d'AOS pour animer certains éléments -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    // Utilisation des animations
</script>

<script>
    // Envoi asynchrone pour la newsletter
    document.getElementById("form-newsletter").addEventListener("submit", (e) => {
        // Store reference to form to make later code easier to read
        const form = e.target;

        // On utilise fetch pour envoyer les données
        fetch(form.action, {  //envoie vers newsletter.php
        method: form.method,  //méthode POST
        body: new FormData(form),
        });

        // Empêche le formulaire de s'envoyer avec "action"
        // A la fin, ne s'active que si tout le code avant a marché
        e.preventDefault();
    });
</script>
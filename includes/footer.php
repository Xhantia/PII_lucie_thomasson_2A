<footer class="container-fluid">

    <!-- javascript pour formulaire newsletter -->
    <!-- <script src="../js-php-blog/newsletter.js"></script>  -->
        <div class="container newsletter">
            <h3>S'abonner à la newsletter</h3>
            <p id="resultat"></p>
            <form method ="POST" class="container form" id="formNewsletter" name='form-newsletter'>
				<input type="email" required placeholder="Adresse mail" id ="newsletter_email" class="form-input"/>
				<input type="text" required placeholder="Prénom/pseudo" id ="newsletter_pseudo" class="form-input"/>
                <br/>
                <input type="submit" id="submit" value="S'inscrire" class="form-button"/>
            </form>
        </div>
        <div class="container infos-footer">
        <p>Ptite bannière ?</p>
        <p class="footer-text">Construit avec amour par Lucie Thomasson dans le cadre du Projet Informatique Individuel / Photos @ Lucie Thomasson, @ Unsplash</p>
        </div>
</footer>

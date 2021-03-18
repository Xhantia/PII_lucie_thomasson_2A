<footer class="container-fluid">

    <!-- javascript pour formulaire newsletter -->
    <script type="text/javascript" src="js-php-blog/newsletter.js"></script> 
        <div class="container newsletter">
            <h3>S'abonner à la newsletter</h3>
            <p id="infos-newsletter"></p>
            <form method ="POST" class="container form" id="form-newsletter" name='form-newsletter'>
				<input type="email" required placeholder="Adresse mail" name ="newsletter_email" class="form-input"/>
				<input type="text" required placeholder="Prénom/pseudo" name ="newsletter_pseudo" class="form-input"/>
                <br/>
                <input type="submit" value="S'inscrire" class="form-button"/>   
            </form>
        </div>
        <div class="container infos-footer">
        <p>Ptite bannière ?</p>
        <p class="footer-text">Construit avec amour par Lucie Thomasson dans le cadre du Projet Informatique Individuel / Photos @ Lucie Thomasson, @ Unsplash</p>
        </div>

</footer>

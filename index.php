<!DOCTYPE html>
<html>
<?php require_once "includes/functions.php"; ?>  <!--Inclusion des fonctions PHP -->
<?php require_once "includes/header.php"; ?>     <!-- Inclusion du header -->
    <body>
        <div class="container-xl corps">
            <div class="col-xl posts">

                <!-- conteneur du dernier post -->
                <div class="container last-post">
                    <!-- contient image et intitule du post -->
                    <div class="d-lg-flex" href="article.php">
                        <div>
                        <img class="image-post" src="images/castes_magie.jpg" alt="image illustrant le post">
                        </div>
                        <!-- contient tout l'intitule ecrit du post -->
                        <div class="post-resume">
                            <div class="small text-muted text-center"><a href="article.php">24 Mars 2021 • Le Monde des Premiers</a></div>
                            <h2  class="h2-titre-post text-center"><a href="article.php">Magie et castes</a></h2>
                            <div class="text-left"><a href="article.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis...</a></div>
                        </div>
                    </div>
                </div>

                 <div class="container last-post">
                    <!-- contient image et intitule du post -->
                    <div class="d-lg-flex" href="article.php">
                        <div>
                        <img class="image-post" src="images/rester_inspire.jpg" alt="image illustrant le post">
                        </div>
                        <!-- contient tout l'intitule ecrit du post -->
                        <div class="post-resume">
                            <a href="article.php">
                            <div class="small text-muted text-center"><a href="article.php">12 Février 2021 • Conseils d'écriture</a></div>
                            <h2  class="h2-titre-post text-center"><a href="article.php">Rester inspiré</a></h2>
                            <div class="text-left"><a href="article.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis...</a></div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container last-post">
                    <!-- contient image et intitule du post -->
                    <div class="d-lg-flex" href="article.php">
                        <div>
                        <img class="image-post" src="images/castes_magie.jpg" alt="image illustrant le post">
                        </div>
                        <!-- contient tout l'intitule ecrit du post -->
                        <div class="post-resume">
                            <div class="small text-muted text-center"><a href="article.php">4 Février 2021 • Le Monde des Premiers</a></div>
                            <h2  class="h2-titre-post text-center"><a href="article.php">La carte interactive est en ligne !</a></h2>
                            <div class="text-left"><a href="article.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis...</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container col-4 barre-laterale">
                <!-- vers la page d'a propos sur l'autrice -->
                <a href="apropos.php">
                    <div class="container" style="background-image: url('images/image_index_apropos.jpg'); background-size: cover;" id="index-apropos" href="apropos.php">
                        <h2 class="mark">Qui suis-je ?</h2>
                        <p class="mark">En savoir plus sur l'autrice</p>
                    </div>
                </a>
                <!-- vers l'à-propos et feed instagram -->
                <div class="container insta">
                    <h2 class="text-center mb-3 mt-3">Les dernières publications Instagram</h2>
                    <div id="instafeed" class="justify-content-center"></div>
                </div>
            </div>
        </div>
        <!-- inclusion du footer -->
        <?php require_once "includes/footer.html"; ?>
        <!-- inclusion des scripts -->
        <?php require_once "includes/scripts.html"; ?>
    </body>
</html>
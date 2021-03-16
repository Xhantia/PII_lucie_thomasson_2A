<!DOCTYPE html>
<html>
<?php require_once "includes/functions.php"; ?>  <!--Inclusion des fonctions PHP -->
<?php require_once "includes/header.php"; ?>     <!-- Inclusion du header -->
    <body>
        <div class="container-xl corps">
            <div class="col-xl posts">
                <h2>DERNIERS ARTICLES</h2>

                <!-- conteneur du dernier post -->
                <div class="container last-post">
                    <!-- contient image et intitule du post -->
                    <div class=" d-block d-lg-flex">
                        <div>
                        <img class="image-post" src="images/banniere_test.png" alt="image illustrant le post">
                        </div>
                        <!-- contient tout l'intitule ecrit du post -->
                        <div class="post-resume">
                            <div class="date-read d-block">Jun 14 2021 • Le Monde des Premiers</div>
                            <div class="post-title"><h2>Titre du post</h2></div>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis, iste adipisci excepturi consectetur doloribus aliquam accusantium beatae?</p>
                        </div>
                    </div>
                </div>

                <div class="container last-post">
                    <!-- contient image et intitule du post -->
                    <div class="d-block d-lg-flex">
                        <div>
                        <img class="image-post" src="images/banniere_test.png" alt="image illustrant le post">
                        </div>
                        <!-- contient tout l'intitule ecrit du post -->
                        <div class="post-resume">
                            <div class="date-read d-block">Jun 14 2021 • Le Monde des Premiers</div>
                            <div class="post-title"><h2>Titre du post</h2></div>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis, iste adipisci excepturi consectetur doloribus aliquam accusantium beatae?</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container col-4 barre-laterale">
                <!-- vers la page d'a propos sur l'autrice -->
                <a href="apropos.php">
                    <div class="container" id="index-apropos" href="apropos.php">
                        <h2>Qui suis-je ?</h2>
                        <p>En savoir plus sur l'autrice</p>
                    </div>
                </a>
                <!-- vers l'à-propos et feed instagram -->
                <div class="container">
                    <h2>Que se passe-t-il sur Instagram ?</h2>
                    <p> inclusion du feed instagram</p>
                </div>
            </div>
        </div>
        <!-- inclusion du footer -->
        <?php require_once "includes/footer.php"; ?>
        <!-- inclusion des scripts -->
        <?php require_once "includes/scripts.php"; ?>
    </body>
</html>
<!DOCTYPE html>
<html>
<?php require_once "includes/functions.php"; ?>  <!--Inclusion des fonctions PHP -->
<?php require_once "includes/header.php"; ?>     <!-- Inclusion du header -->
    <body>
        <div class="container corps flex-column">
        <!-- regroupe titre et infos sur la carte -->
            <div class="container map-header">
                <div>
                    <h1>Le Continent</h1>
                </div>
                <div>
                    <p>Berceau du Monde des Premiers. Terre de magie, de royauté et de mystères.</p>
                </div>
                <div>
                    <h2>Maisons dirigeantes</h2>
                    <div class="maison-litreans">Litréans</div>
                    <div class="maison-hamilcar">Hamilcar</div>
                    <div class="maison-eristene">Eristène</div>
                    <div class="maison-hafferyn">Hafferyn</div>
                    <div class="maison-blustrode">Blustrode</div>
                    <div class="maison-herjafol">Herjafol</div>
                </div>
                <div>
                    <h2>Légende</h2>
                    <div>Capitale</div>
                    <div>Ville secondaire</div>
                    <div>Lieu d'intérêt</div>
                </div>
            </div>

            <div class="container" id="continent" style="background-image: url('images/le_continent.jpeg'); background-size:contain; background-repeat: no-repeat; max-width: 70%; height:1800px;">
            </div>
        </div>

        <!-- inclusion du footer -->
        <?php require_once "includes/footer.php"; ?>
        <!-- inclusion des scripts -->
        <?php require_once "includes/scripts.php"; ?>
    </body>

</html>
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
                        <div class="maison-hamilcar" title="Cliquez pour afficher la région">Hamilcar</div>
                </div>
                <div>
                    <h2>Légende</h2>
                    <div>Capitale</div>
                    <div>Ville secondaire</div>
                    <div>Lieu d'intérêt</div>
                </div>
            </div>

            <div class="container" id="continent">

                <!-- Territoires sur la carte -->
                <div class="territoire">
                    <div class="territoire hamilcar"></div>
                </div>

                <!-- Lieux d'intérêt -->
                    <!-- Prévoyer Hamilcar -->
                    <div class="lieux-interet">
                        <a href="#" class="modal-link" data-modal-target="anchoris">
                            <div class="capitale-anchoris"></div>
                        </a>
                    </div>
                

                <!-- Données affichées dans les modal -->
                    <!-- Prévoyer Hamilcar -->
                    <!-- <div id="anchoris" class="modal-content">
			            <div class="modal-head">
				            <div class="icon-city-13"></div>
				            <div class="modal-title">
					            <h1>Anchoris</h1>
					            <h2>Capitale du Prévoyer Hamilcar.</h2>
				            </div>
			            </div>
                        <p>
                            Formerly known as <b>Victor's Hollow</b>, this city was once home to the famed coliseum known across Orsterra. Now, the seat of power of the <b>Consiglio</b> resides here; the city a paragon of splendid architecture and fortified defenses.
                        </p>
			            <a href="#"><i class="fas fa-arrow-right"></i> en savoir plus - lien inactif -</a>
		            </div> -->


            </div>
        </div>

        <!-- inclusion du footer -->
        <?php require_once "includes/footer.php"; ?>
        <!-- inclusion des scripts -->
        <?php require_once "includes/scripts.html"; ?>
    </body>

</html>
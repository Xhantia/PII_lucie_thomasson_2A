<!DOCTYPE html>
<html>
<?php require_once "includes/functions.php"; ?>  <!--Inclusion des fonctions PHP -->
<?php require_once "includes/header.php"; ?>     <!-- Inclusion du header -->
    <body>
        <div class="container corps flex-column">
        <!-- regroupe titre et infos sur la carte -->
            <div class="container map-header justify-content-around">
                <div>
                    <h1>Le Continent</h1>
                    <p>Berceau du Monde des Premiers. Terre de magie, de royauté et de mystères.</p>
                </div>
                <div>
                    <h2>Maisons dirigeantes</h2>
                        <div class="maison-hamilcar" title="Cliquez pour afficher la région">Hamilcar</div>
                        <div class="maison-eristene" title="Cliquez pour afficher la région">Eristène</div>
                        <div class="maison-litreans" title="Cliquez pour afficher la région">Litréans</div>
                        <div class="maison-hafferyn" title="Cliquez pour afficher la région">Hafferyn</div>
                        <div class="maison-blustrode" title="Cliquez pour afficher la région">Blustrode</div>
                        <div class="maison-herjafol" title="Cliquez pour afficher la région">Herjafol</div>
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
                <div id="hamilcar"></div>
                <div id="eristene"></div>
                <div id="litreans"></div>
                <div id="hafferyn"></div>
                <div id="blustrode"></div>
                <div id="herjafol"></div>

                <!-- Lieux d'intérêt -->
                    <!-- Prévoyer Hamilcar -->
                        <a href="#" class="modal-link" data-modal-target="anchoris">
                            <i id="anchoris" class="capitale fas fa-bahai"></i>
                        </a>
                

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
        <?php require_once "includes/footer.html"; ?>
        <!-- inclusion des scripts -->
        <?php require_once "includes/scripts.html"; ?>
    </body>

</html>
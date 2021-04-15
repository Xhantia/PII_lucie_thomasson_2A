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
                    <div><i id="fas fa-bahai"></i>Capitale</div>
                    <div>Ville secondaire</div>
                    <div>Lieu d'intérêt</div>
                </div>
            </div>
            
                <div class="container" id="continent">
                    <!-- Lieux d'intérêt  -->
                        <!-- Prévoyer Hamilcar -->
                                <button class="anchoris capitale"><i class="fas fa-bahai"></i></button>

                    <!-- Territoires sur la carte -->            
                    <div id="hamilcar"></div>
                    <div id="eristene"></div>
                    <div id="litreans"></div>
                    <div id="hafferyn"></div>
                    <div id="blustrode"></div>
                    <div id="herjafol"></div>
                    

                    <!-- Lore à afficher -->
                        <!-- Prévoyer Hamilcar -->
                            <div class="modal fade" id="anchoris">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title mb-1 mt-1" >Anchoris</h1>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <div class="pb-2">
                                                <h2>Capitale du Prévoyer Hamilcar.</h2>
                                            </div>
                                            <p class=p-2>
                                                Capitale du plus grand Prévoyer du Continent, Anchoris en est également le premier port. 
                                                Près des deux tiers du traffic maritime avec les <b>Terres d'Ailleurs</b> transite par la ville. 
                                                Un lieu cosmopolite et haut en couleur, où réside la famille <b>Hamilcar</b>.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <a>Plongez dans l'univers <i class="fas fa-arrow-right p-1"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>

        </div>

        <!-- inclusion du footer -->
        <?php require_once "includes/footer.html"; ?>
        <!-- inclusion des scripts -->
        <?php require_once "includes/scripts.html"; ?>
    </body>

</html>
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
                                <button class="anchoris"><i class="fas fa-bahai"></i></button>
                                <button class="enathon"><i class="fas fa-bahai"></i></button>
                                <button class="milantal"><i class="fas fa-bahai"></i></button>

                    <!-- Territoires sur la carte -->            
                    <div id="hamilcar"></div>
                    <div id="eristene"></div>
                    <div id="litreans"></div>
                    <div id="hafferyn"></div>
                    <div id="blustrode"></div>
                    <div id="herjafol"></div>
                    

                    <!-- Lore à afficher -->
                        <!-- Prévoyer Hamilcar -->
                            <div class="modal" id="anchoris">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title mb-1 mt-1">Anchoris</h1>
                                            <div type="button" class="close">
                                                <span aria-hidden="true">&times;</span>
                                            </div>
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

                            <!-- Prévoyer Eristène -->
                            <div class="modal" id="enathon">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title mb-1 mt-1">Enathon</h1>
                                            <div type="button" class="close">
                                                <span aria-hidden="true">&times;</span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="pb-2">
                                                <h2>Capitale du Prévoyer Eristène.</h2>
                                            </div>
                                            <p class=p-2>
                                                Située sur un immense surplomb rocheux, Enathon est une ville <b>ensoleillée</b> dont les habitants 
                                                ne jouissent pas des mêmes privilèges. Durement touchée par l'<b>épidémie</b> ayant 
                                                ravagé le Continent vingt ans plus tôt et provoqué plusieurs exodes, elle est entourée de 
                                                <b>bidonvilles</b>, où vivent les familles ayant tout perdu.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <a>Plongez dans l'univers <i class="fas fa-arrow-right p-1"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Prévoyer Litréans -->
                            <div class="modal" id="milantal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title mb-1 mt-1">Milantal</h1>
                                            <div type="button" class="close">
                                                <span aria-hidden="true">&times;</span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="pb-2">
                                                <h2>Capitale du Prévoyer Litréans.</h2>
                                            </div>
                                            <p class=p-2>
                                                Milantal est aussi réputée pour la beauté de son lac que pour son <b>Palais Militaire</b>, 
                                                plus haute instance juridique du Continent. Parmi les attractions de cette ville, on rtrouve
                                                également la mythique <b>famille Litréans</b>, légendaire à plus d'un égard, ainsi qu'un temps
                                                toujours <b>maussade</b> qui ne manque pas de faire râler Auguste Hamilcar.
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
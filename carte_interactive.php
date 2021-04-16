<!DOCTYPE html>
<html>
<?php require_once "includes/functions.php"; ?>  <!--Inclusion des fonctions PHP -->
<?php require_once "includes/header.php"; ?>     <!-- Inclusion du header -->
    <body>
        <div class="container corps flex-column">
        <!-- regroupe titre et infos sur la carte -->
            <div class="container map-header justify-content-around flex-column">
                <div>
                    <h1 class="map-title">Le Continent</h1>
                    <p>Berceau du Monde des Premiers. Terre de magie, de royauté et de mystères.</p>
                </div>
                <div>
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
            </div>
            
                <div class="container" id="continent">
                    <!-- Lieux d'intérêt  -->
                        <!-- Prévoyer Hamilcar -->
                                <button class="anchoris"><i class="fas fa-bahai"></i></button>
                                <button class="enathon"><i class="fas fa-bahai"></i></button>
                                <button class="milantal"><i class="fas fa-bahai"></i></button>
                                <button class="tristene"><i class="fas fa-bahai"></i></button>
                                <button class="crein"><i class="fas fa-bahai"></i></button>
                                <button class="nirhvald"><i class="fas fa-bahai"></i></button>

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
                                            <h1 class="modal-title mt-1">Anchoris <i class="fas fa-ship"></i></h1>
                                            <div type="button" class="close">
                                                <span aria-hidden="true">&times;</span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="pb-2">
                                                <h2 class="modal-subtitle">Capitale du Prévoyer Hamilcar.</h2>
                                            </div>
                                            <p class=p-2>
                                                Capitale du plus grand Prévoyer du Continent, Anchoris en est également le premier port. 
                                                Près des deux tiers du traffic maritime avec les <b>Terres d'Ailleurs</b> transite par la ville. 
                                                Un lieu cosmopolite et haut en couleur, où réside la famille <b>Hamilcar</b>.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="text-right">Plongez dans l'univers <i class="fas fa-arrow-right p-1"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Prévoyer Eristène -->
                            <div class="modal" id="enathon">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title mt-1">Enathon<i class="fas fa-chess-rook"></i></h1>
                                            <div type="button" class="close">
                                                <span aria-hidden="true">&times;</span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="pb-2">
                                                <h2 class="modal-subtitle">Capitale du Prévoyer Eristène.</h2>
                                            </div>
                                            <p class=p-2>
                                                Située sur un immense surplomb rocheux, Enathon est une ville <b>ensoleillée</b> dont les habitants 
                                                ne jouissent pas des mêmes privilèges. Durement touchée par l'<b>épidémie</b> ayant 
                                                ravagé le Continent vingt ans plus tôt et provoqué plusieurs exodes, elle est entourée de 
                                                <b>bidonvilles</b>, où vivent les familles ayant tout perdu.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="text-right">Plongez dans l'univers <i class="fas fa-arrow-right p-1"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Prévoyer Litréans -->
                            <div class="modal" id="milantal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title mt-1">Milantal<i class="fas fa-balance-scale"></i></h1>
                                            <div type="button" class="close">
                                                <span aria-hidden="true">&times;</span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="pb-2">
                                                <h2 class="modal-subtitle">Capitale du Prévoyer Litréans.</h2>
                                            </div>
                                            <p class=p-2>
                                                Milantal est aussi réputée pour la beauté de son lac que pour son <b>Palais Militaire</b>, 
                                                plus haute instance juridique du Continent. Parmi les attractions de cette ville, on trouve
                                                également la mythique <b>famille Litréans</b>, légendaire à plus d'un égard, ainsi qu'un temps
                                                toujours <b>maussade</b> qui ne manque pas de faire râler Auguste Hamilcar.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="text-right">Plongez dans l'univers <i class="fas fa-arrow-right p-1"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- Prévoyer Hafferyn -->
                             <div class="modal" id="tristene">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title mt-1">Tristène<i class="fas fa-sun"></i></h1>
                                            <div type="button" class="close">
                                                <span aria-hidden="true">&times;</span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="pb-2">
                                                <h2 class="modal-subtitle">Capitale du Prévoyer Hafferyn.</h2>
                                            </div>
                                            <p class=p-2>
                                                Lieu de villégiature de la <b>famille Hafferyn</b>, Tristène est une cité de pavée balayée
                                                par une brise tiède. On y ressent quelque influence méditérranéenne, accentuée par 
                                                les <b>couleurs chatoyantes</b> des vêtements de ses habitants. Tristène est connue
                                                pour son commerce de la <b>soie</b>.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="text-right">Plongez dans l'univers <i class="fas fa-arrow-right p-1"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- Prévoyer Blustrode -->
                             <div class="modal" id="crein">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title mt-1">Crein<i class="fas fa-dungeon"></i></h1>
                                            <div type="button" class="close">
                                                <span aria-hidden="true">&times;</span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="pb-2">
                                                <h2 class="modal-subtitle">Capitale du Prévoyer Blustrode.</h2>
                                            </div>
                                            <p class=p-2>
                                                Entourée de trois solides <b>murs</b> qui la protègent contre le <b>blizzard</b>
                                                hivernal, Crein est constituée d'un centre-ville au maisons accolées et aux toits pentus.
                                                On aime s'y promener pour admirer les devantures <b>chatoyantes</b> des échoppes, illuminées
                                                pendant la nuit. 
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="text-right">Plongez dans l'univers <i class="fas fa-arrow-right p-1"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Prévoyer Herjafol -->
                            <div class="modal" id="nirhvald">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title mt-1">Nirhvald<i class="fas fa-trailer"></i></h1>
                                            <div type="button" class="close">
                                                <span aria-hidden="true">&times;</span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="pb-2">
                                                <h2 class="modal-subtitle">Capitale du Prévoyer Herjafol.</h2>
                                            </div>
                                            <p class=p-2>
                                                Nirhvald est la plus grande <b>ville industrielle</b> du Continent. Située non-loin 
                                                des usines ferroviaires, elle traite <b>l'acier</b> nécessaire à la construction des trains.
                                                C'est également le lieu de vie de la <b>famille Herjafol</b>, très attachée à ses racines 
                                                ouvrières.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="text-right">Plongez dans l'univers <i class="fas fa-arrow-right p-1"></i></a>
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
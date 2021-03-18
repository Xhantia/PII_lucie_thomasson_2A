<?php session_start(); ?>
!DOCTYPE html>
<html>
<?php require_once "includes/functions.php"; ?>  <!--Inclusion des fonctions PHP -->
<?php require_once "includes/header.php"; ?>     <!-- Inclusion du header -->
    <body>
        <div class="container-xl corps">
            <?
            // On récupère les infos du template d'article
            $article = getDb() -> query("select * from blogautrice where id_article='1'");
            echo $article;
            ?>

        </div>
        <!-- inclusion du footer -->
        <?php require_once "includes/footer.php"; ?>
        <!-- inclusion des scripts -->
        <?php require_once "includes/scripts.php"; ?>
    </body>
</html>
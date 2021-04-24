<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php require_once "includes/functions.php"; ?>
<?php require_once "includes/header.php"; ?>
    <body>
            <div class="col-xl article">
                <?php
                /*On récupère les infos du template d'article*/
                if(getDB()) {
                    // $message = "Bien connecté à la DB";
                    // echo $message;
                    $article = getDB() -> query("select * from article where id_article='1'") -> fetch();
                    $theme = getDB() -> query("select nom_categorie from categorie where id_categorie = $article[1]") -> fetch();
                }
                else {
                    $message = "erreur";
                    echo $message;
                }
                ?>
                <!-- date -->
                <div><p class="small text-muted"><?php echo $article[3]; ?> | <?php echo $theme[0]; ?></p></div>
                <!-- image -->
                <div><?php echo "<img class='article-head' src='".$article[4]."'alt='image illustrant le post'>";?></div>
                <!-- titre -->
                <div><h1 class="container"><?php echo $article[2]; ?></h1></div>
                <!-- contenu -->
                <div><p class="container col-9"><?php echo $article[5]; ?></p></div>
            </div>

        <!-- inclusion du footer -->
        <?php require_once "includes/footer.html"; ?>
        <!-- inclusion des scripts -->
        <?php require_once "includes/scripts.html"; ?>
    </body>
</html>
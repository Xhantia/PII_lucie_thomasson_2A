<?php require_once "includes/functions.php";?>

<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- css -->
  <link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.css">
  <link rel="stylesheet" href="./css-blog/blog-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">

  <title>Un super blog d'auteur</title>
</head>

<body>
<nav class="navbar navbar-toggler navbar-collapse navbar-expand navbar-light fixed-top bg-white row">
  <!-- <div class="container-fluid"> -->
    <div class="container col-1"></div>
      <div class="container col-3">
              <form>
                <input type="search" class="input-search" placeholder="Recherche inactive" name="search">
                <button type="submit" class="loupe-search btn"><i class="fa fa-search"></i></button>
              </form>
      </div>
      <div class="collapse navbar-collapse container col-6 justify-content-between">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apropos.php">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="article.php">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carte_interactive.php" tabindex="-1" aria-disabled="true">Carte interactive</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
          </li>
        </ul>
      </div>
      <div class="container col-1 justify-content-between">
        <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
        <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
        <a href="https://youtube.com"><i class="fab fa-youtube"></i></a>
        <a href="https://tumblr.com"><i class="fab fa-tumblr"></i></a>
        <a href="contact.php"><i class="fas fa-envelope"></i></a>
      </div>
    <div class="container col-1"></div>
  <!-- </div> -->
</nav>

 <!-- Insertion du logo du site -->
 <div class="container-fluid box-logo">
    <img class="container col-6" src="images/banniere_test.png" alt="logo du site">
  </div>
</body>
</html>
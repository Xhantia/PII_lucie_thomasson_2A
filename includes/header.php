<?php require_once "includes/functions.php";?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.css">
  <link rel="stylesheet" href="./css-blog/blog-style.css">
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <!-- icon library -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <title>Un super blog d'auteur</title>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-white row">
  <div class="container-fluid">
    <div class="container col-1"></div>
      <div class="container col-2">
              <form>
                <input type="text" class="input-search" placeholder="Recherche inactive" name="search">
                <button type="submit" class="loupe-search"><i class="fa fa-search"></i></button>
              </form>
      </div>
      <div class="collapse navbar-collapse container col-6" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apropos.php">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="lecture.php">Lecture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ecriture.php" tabindex="-1" aria-disabled="true">Ecriture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="le-monde-des-premiers.php" tabindex="-1" aria-disabled="true">Le Monde des Premiers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
          </li>
        </ul>
      </div>
      <div class="container col-2">
        <a href="https://facebook.com"><i class="fa fa-facebook fa-fx"></i></a>
        <a href="https://twitter.com"><i class="fa fa-twitter fa-fw"></i></a>
        <a href="https://instagram.com"><i class="fa fa-instagram fa-fw"></i></a>
        <a href="https://youtube.com"><i class="fa fa-youtube-play fa-fw"></i></a>
        <a href="https://tumblr.com"><i class="fa fa-tumblr fa-fw"></i></a>
        <a href="contact.php"><i class="fa fa-envelope fa-fw"></i></a>
      </div>
    <div class="container-fluid col-1"></div>
  </div>
</nav>

 <!-- Insertion du logo du site -->
 <div class="container-fluid box-logo">
    <img class="container col-6" src="images/banniere_test.png" alt="logo du site">
  </div>
</body>
</html>
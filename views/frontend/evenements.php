<?php
require_once '../../config.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LSART</title>
  <link href="<?php echo ROOT_URL; ?>/src/css/style.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/src/images/Logo_LSART_Google.webp" />
</head>


<body>
<nav id="navbar" class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <img src="../../src/images/LS_logo_noir.webp" alt="Logo LSART" id="logo_header" class="logo_header">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Accueil</a>
        </li>
        <li>
        <a class="nav-link active" href="/">Evenements</a>
        </li>
        <li>
        <a class="nav-link active" href="/">Blog</a>
        </li>
        <li>
        <a class="nav-link active" href="/">À propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/backend/dashboard.php">Admin</a>
        </li>
      </ul>
    </div>
    <!--right align-->
    <div class="d-flex">
      <form id="search_bar" class="d-flex" role="search">
        <div class="input-group mb-3 search_bar">
        <span class="input-group-text search_icon">
        <img src="../../src/images/search.png" alt="Pictogramme loupe" id="picto_loupe">
        </span>
        <input class="form-control me-2 search_input" type="search" placeholder="Rechercher" aria-label="Search">
      </div>
      </form>
      <a id="connexion" class="btn btn-primary m-1" href="/views/backend/security/login.php" role="button">Connexion</a>
      <a id="inscription" class="btn btn-primary m-1" href="/views/backend/security/login.php" role="button">Inscription</a>
    </div>
  </div>
</nav>

<body>

    <!-------------------------------- Carroussel ------------------------------------------->

    
        <div  class="header">
            <H1>Evenements</H1>
            <img src="/xampp/htdocs/blogart24/src/images/Edgar">
        </div>
        <H3>A venir...</H3>
    <section class="carroussel">
        <div class="img1">
            <img src="img1">
                <h4>Evenement "..."</h4>
                <h6>en savoir plus</h6>
        </div>
        <div class="img2">
            <img src="img3">
                <h4>Evenement "..."</h4>
                <h6>en savoir plus</h6>
        </div>


        <div class="img3">
            <img src="img3">
                <h4>Evenement "..."</h4>
                <h6>en savoir plus</h6>
    </section>

    <!-------------------------------- Ajouter ligne en CSS ------------------------------------------->

    <hr>

    <!-------------------------------- Evenement en cours ------------------------------------------->

    <div class="En cours">
        <div class="arti1">
            <div class="img4">
                <img src="img4">
                <h4>Evenement "..."</h4>
                <h6>en savoir plus</h6>
            </div>

            <div class="txt1">
                Lorem ipsum...
            </div>
        </div>

        <div class="arti2">
            <div class="txt2">
                Lorem ipsum...
            </div>

            <div class="img4">
                <img src="img4">
                <h4>Evenement "..."</h4>
                <h6>en savoir plus</h6>
            </div>
        </div>
    </div>
</body>
<footer>
  <div>
    <img src="../../src/images/LS_logo_blanc.webp">
    <p>LS'Art © 2024</p>
  </div>
  <div>
    <h5>Plan du site</h5>
    <p>Accueil</p>
    <p>Évènements</p>
    <p>Blog</p>
    <p>À propos</p>
    <p>Recherche</p>
    <p>Connexion</p>
  </div>
  <div>
    <h5>Légal</h5>
    <p>Gestion des cookies</p>
    <p>Mention légales</p>
    <p>Gestion de vos données</p>
  </div>
  <div>
    <h5>Nous suivre</h5>
    <p>S'abonner à la Newsletter</p>
    <button>Nous contacter</button>
  </div>

</footer>
</html>
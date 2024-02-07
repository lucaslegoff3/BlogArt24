<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LSART</title>
  <!-- Load CSS -->
  <link rel="stylesheet" href="../../src/css/style.css" />
  <!-- Bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="shortcut icon" type="image/x-icon" href="./src/images/Logo_LSART_Google.webp" />
</head>
<?php
//load config
require_once '../../config.php';
?>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <img src="./src/images/LS_logo_noir.webp" alt="Logo LSART">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Acceuil</a>
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
        <form class="d-flex" role="search">
          <div class="input-group mb-3">
            <span class="input-group-text">
              <img src="./src/images/search.png" alt="Pictogramme loupe">
            </span>
            <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
          </div>
        </form>
        <a class="btn btn-primary m-1" href="/views/backend/security/login.php" role="button">Connexion</a>
      </div>
    </div>
  </nav>

  <div>
    <h1>Qui Sommes Nous ?</h1>
  </div>
  <hr>
  <section class="equipe">
    <div>
      <img src="../../src/images/legoff.webp" class="tete_equipe">
      <h4>Lucas Le Goff</h4>
      <h6>Polyvalent</h6>
    </div>
    <div>
      <img src="../../src/images/duteil.webp" class="tete_equipe">
      <h4>Bartholomé Duteil</h4>
      <h6>Gestion de projet</h6>
    </div>
    <div>
      <img src="../../src/images/pasticier.webp" class="tete_equipe">
      <h4>Lucas Pasticier</h4>
      <h6>Directeur Artistique</h6>
    </div>
    <div>
      <img src="../../src/images/delgado.webp" class="tete_equipe">
      <h4>Adrian Delgado</h4>
      <h6>Directeur Artistique</h6>
    </div>
    <div>
      <img src="../../src/images/quemere.webp" class="tete_equipe">
      <h4>Edgar Quéméré</h4>
      <h6>Chef de projet</h6>
    </div>
  </section>
  <hr>
  <section class="equipeetcause">
    <div>
      <h3>L'équipe</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia iste modi, molestiae ex incidunt aperiam a soluta
        itaque, officia distinctio adipisci corporis facilis provident aliquid at porro, harum officiis omnis!</p>
    </div>
    <div>
      <h3>La cause</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia iste modi, molestiae ex incidunt aperiam a soluta
        itaque, officia distinctio adipisci corporis facilis provident aliquid at porro, harum officiis omnis!</p>
    </div>
  </section>
  <hr>

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
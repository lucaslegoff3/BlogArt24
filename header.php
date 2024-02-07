<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="fr-FR">

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
      <img src="<?php echo ROOT_URL; ?>/src/images/LS_logo_noir.webp" alt="Logo LSART" id="logo_header" class="logo_header">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>">Accueil</a>
          </li>
          <li>
            <a class="nav-link active" href="<?php echo ROOT_URL; ?>/views/frontend/evenements.php">Evenements</a>
          </li>
          <li>
            <a class="nav-link active" href="<?php echo ROOT_URL; ?>/views/frontend/article1.php">Blog</a>
          </li>
          <li>
            <a class="nav-link active" href="<?php echo ROOT_URL; ?>/views/frontend/equipe.php">À propos</a>
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
              <img src="<?php echo ROOT_URL; ?>/src/images/search.png" alt="Pictogramme loupe" id="picto_loupe">
            </span>
            <input class="form-control me-2 search_input" type="search" placeholder="Rechercher" aria-label="Search">
          </div>
        </form>
        <a id="connexion" class="btn btn-primary m-1" href="<?php echo ROOT_URL; ?>/views/backend/security/login.php" role="button">Connexion</a>
        <a id="inscription" class="btn btn-primary m-1" href="<?php echo ROOT_URL; ?>/views/backend/security/login.php" role="button">Inscription</a>
      </div>
    </div>
  </nav>
  <hr>
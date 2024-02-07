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
        <a class="nav-link active" href="./evenements.php">Evenements</a>
        </li>
        <li>
        <a class="nav-link active" href="/">Blog</a>
        </li>
        <li>
        <a class="nav-link active" href="./equipe.php">À propos</a>
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

    <!-------------------------------- img + Titre header  ------------------------------------------->

    <div class="header">
    <h1 class="accueil">Bordeaux à travers la musique accessible</h1>
</div>

    <!-------------------------------- Ligne à rjt CSS  ------------------------------------------->

    <!--------------------------------  Article  ------------------------------------------->
    <hr class="barre">
    <div class="article">
            <h2>Article</h2>
        <div class="article_1">
            <p>“Les Festivals sont des événements devenus incontournables au fil des années. Très à la mode dans les années 70, ils ont su s’adapter au fil des années pour plaire à tout public en proposant de plus en plus de variations de styles musicaux. Cependant, quand on parle d'accessibilité à ces événements, la question des personnes atteintes de surdité se pose. Comment faire en sorte pour qu'elles aussi puissent ressentir la musique ?”</p>
            <!-------------------------------- txt1 à gauche et img1 à droite ------------------------------------------->
            <img src="img1 article">
        </div>

        <div class="">
            <p>Tout d'abord, la traduction en chansigne, une forme de langage gestuel spécifiquement conçue pour les personnes sourdes, peut être intégrée. Des écrans d'affichage avec sous-titres sont des éléments clés pour une expérience immersive. De plus, ces dernières années, nous remarquons dans de plus en plus de festivals l’existence de pôle d’accueil surdité, où des équipements sont mis à disposition en location, comme des gilets vibrants.
            </p>
            <p>
            Ce type de dispositif utilise des capteurs intégrés qui captent les fréquences sonores et les transforment en vibrations ressenties par l'utilisateur. Lors de concerts, les gilets vibrants permettent aux personnes sourdes de ressentir physiquement le rythme et les nuances musicales, créant ainsi une connexion unique avec l'artiste et la performance.
</p>
<p>
            Le principal avantage de ces gilets réside dans leur portabilité et leur discrétion, offrant une solution non intrusive pour les amateurs de musique sourds. Les utilisateurs peuvent ajuster l'intensité des vibrations en fonction de leurs préférences, personnalisation qui contribue à rendre l'expérience encore plus immersive.
</p>
        </div>

        <!-------------------------------- img2 à gauche et txt2 à droite ------------------------------------------->
        <div class="article_1">
            <img src="img2">
            <div>
            <p>Cependant, des défis subsistent, tels que la nécessité de sensibiliser davantage les organisateurs d'événements et le grand public à ces dispositifs. Il est crucial d'établir des normes et des régulations pour garantir une utilisation optimale sans perturber l'expérience des autres participants.
            </p>
            <p>
            En plus de ces soucis logistiques, il faut prendre en compte le coût de ces équipements : en effet, du fait que cette technologie soit tant récente que complexe à créer, le prix est assez élevé, on peut compter au moins une centaine d’euros par jour pour une location de ce genre de gilets. De plus, leur occurrence se fait très rare dans la plupart des festivals, et un cruel manque de reconnaissance se fait ressentir du fait de la méconnaissance de ce dispositif par le grand public.
            </p>     
            </div>   
          </div>

        <div class="">
          <p>
            Malgré ces défis, les perspectives pour l'avenir sont encourageantes. Les avancées technologiques continuent d'ouvrir de nouvelles possibilités pour améliorer l'accessibilité. Des solutions plus abordables et une sensibilisation accrue à l'inclusivité contribueront à créer des expériences festives pleinement accessibles à tous.
            En plaçant l'inclusivité au cœur de la planification événementielle, les festivals peuvent offrir des sensations uniques et enrichir l'expérience culturelle de chacun, indépendamment de leur capacité auditive. Il faut donc continuer à répandre ce dispositif comme une solution afin de permettre leur démocratisation et faire prendre conscience au public ce problème qui ne demande qu’à être réglé.
          </p>
          <p>
            Des tests pilotes ont été réalisés dans des festivals à travers le monde pour évaluer l'efficacité de ces dispositifs. Certains événements ont introduit avec succès la chansigne, permettant aux participants sourds de vivre pleinement les performances musicales. De plus, des initiatives à propos des gilets vibrants ont été lancées dans certains festivals, mettant en lumière le potentiel de cet équipement pour diversifier l'accessibilité musicale. Ces tests ont suscité des retours positifs, soulignant l'importance de poursuivre le développement de cette technologie inclusive.
          </p>
            <p>
            En conclusion, les gilets vibrants offrent une opportunité novatrice pour rendre les concerts et festivals accessibles aux personnes sourdes. Bien que des défis subsistent, les premiers tests sont encourageants. En suivant ces avancées, les organisateurs peuvent créer des expériences musicales inclusives et uniques, ouvrant ainsi la voie à une nouvelle ère d'accessibilité et d'unité dans le monde de la musique en direct.
            </p>
        </div>
        <!-------------------------------- Ajouter l'espace commentaire (sql) ------------------------------------------->

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
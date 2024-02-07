<?php 
require_once 'header.php';
sql_connect();
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="utf-8" />
  <link href="<?php echo ROOT_URL; ?>/src/css/style.css" rel="stylesheet" type="text/css">
</head>

<div class="header">
    <h1 class="accueil">LA MUSIQUE ACCESSIBLE A TOUS</h1>
    <button class="buttongen">Découvrir</button>
</div>
<hr>
<section class="article_accueil">
    <div>
        <div>
            <img class=accueil1 src="src/images/duteil.webp">
            <h3>Article</h3>
            <h6>en savoir plus</h6>
        </div>
        <div>
            <img class=accueil2 src="src/images/duteil.webp">
            <h3>Article</h3>
            <h6>en savoir plus</h6>
        </div>
    </div>
</section>
<hr>
<section class="qui_sommes_nous">
    <h2>Qui sommes nous ?</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime vel nulla et ducimus blanditiis aut sint 
        numquam ullam perspiciatis, culpa exercitationem enim unde voluptas, totam repellat laborum obcaecati. 
        Quasi, ullam.</p>
    <h6>en savoir plus</h6>
</section>
<hr>


<?php require_once 'footer.php'; ?>
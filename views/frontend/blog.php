<?php 
require_once '../../header.php';
sql_connect();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>blog</title>
</head>
<body>
    <div>
        <img src="img_blog.webp">
        <h1>Festival Accessible aux sourdet malentendant à Bordeaux</h1>
    </div>
    <div>
        <img src="img_article_1.webp">
        <h2>Bordeaux à travers – La musique accessible</h2>
        <h3>Les Festivals sont des événements devenus incontournables au fil des années. Très à la mode dans les années 70, ils ont su s’adapter au fil des années pour plaire à tout public en proposant de plus en plus de variations de styles musicaux. Cependant, quand on parle d'accessibilité à ces événements, la question des personnes atteintes de surdité se pose. Comment faire en sorte pour qu'elles aussi puissent ressentir la musique ?</h3>
        <a class="nav-link active" href="/">en savoir plus</a>
    </div>
    <div>
        <img src="img_article_2.webp">
        <h2>Bordeaux à travers – La musique accessible</h2>
        <h3>Les Festivals sont des événements devenus incontournables au fil des années. Très à la mode dans les années 70, ils ont su s’adapter au fil des années pour plaire à tout public en proposant de plus en plus de variations de styles musicaux. Cependant, quand on parle d'accessibilité à ces événements, la question des personnes atteintes de surdité se pose. Comment faire en sorte pour qu'elles aussi puissent ressentir la musique ?</h3>
        <a class="nav-link active" href="/">en savoir plus</a>
    </div>
    <div>
        <img src="img_article_3.webp">
        <h2>Bordeaux à travers – La musique accessible</h2>
        <h3>Les Festivals sont des événements devenus incontournables au fil des années. Très à la mode dans les années 70, ils ont su s’adapter au fil des années pour plaire à tout public en proposant de plus en plus de variations de styles musicaux. Cependant, quand on parle d'accessibilité à ces événements, la question des personnes atteintes de surdité se pose. Comment faire en sorte pour qu'elles aussi puissent ressentir la musique ?</h3>
        <a class="nav-link active" href="/">en savoir plus</a>
    </div>
    <div>
        <img src="img_article_4.webp">
        <h2>Bordeaux à travers – La musique accessible</h2>
        <h3>Les Festivals sont des événements devenus incontournables au fil des années. Très à la mode dans les années 70, ils ont su s’adapter au fil des années pour plaire à tout public en proposant de plus en plus de variations de styles musicaux. Cependant, quand on parle d'accessibilité à ces événements, la question des personnes atteintes de surdité se pose. Comment faire en sorte pour qu'elles aussi puissent ressentir la musique ?</h3>
        <a class="nav-link active" href="/">en savoir plus</a>
    </div>
    <div class="commentaires">
    <h2>Commentaires</h2>
    <div id="comments-list"></div>
    <img src="utilisateur.webp">
    <h3>Utilisateur</h3>
    <form id="comment-form">
      <textarea
        name="textarea"
        rows="5"
        cols="30"
        placeholder="insérer un commentaire"></textarea>
      <button type="submit">envoyer</button>
    </form>
  </div>
    

</body>

<?php require_once '../../footer.php'; ?>
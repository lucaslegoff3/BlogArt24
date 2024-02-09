<?php
include("../../header.php")
?>

<body>



    <div class="header">
        <H1>Evenements</H1>
        <img src="/xampp/htdocs/blogart24/src/images/Edgar">
    </div>

    <hr class="barre">
    <div class="a_venir">
        <H3>A venir...</H3>
    </div>

    <!-------------------------------- Carroussel ------------------------------------------->
    
    <div class="slider-container">
      <div class="menu">
        <label for="slide-dot-1"></label>
        <label for="slide-dot-2"></label>
        <label for="slide-dot-3"></label>
      </div>
      
      <input class="slide-input" id="slide-dot-1" type="radio" name="slides" checked>
      <img class="slide-img" src="https://www.codeur.com/tuto/wp-content/uploads/2021/12/slide1.jpg">

      <input class="slide-input" id="slide-dot-2" type="radio" name="slides">
      <img class="slide-img" src="https://www.codeur.com/tuto/wp-content/uploads/2021/12/slide2.jpg">
      
      <input class="slide-input" id="slide-dot-3" type="radio" name="slides">
      <img class="slide-img" src="https://www.codeur.com/tuto/wp-content/uploads/2021/12/slide3.jpg">

    </div>


    <section class="carroussel">
        <div class="img1">
            <h4>Evenements</h4>
            <h6>en savoir plus</h6>
        </div>
    </section>

    <!-------------------------------- Fin caroussel ------------------------------------------->

    <hr class="barre">

    <div class="a_venir">
        <h3>Evenements en cours...<h3>
    </div>
    <!-------------------------------- Evenement en cours ------------------------------------------->

    <div class="en_cours">
        <div class="arti1">
            <div class="evenement_1">
                <p>
                “ Les Festivals sont des événements devenus incontournables au fil des années. Très à la mode dans les années 70, ils ont su s’adapter au fil des années pour plaire à tout public en proposant de plus en plus de variations de styles musicaux. Cependant, quand on parle d'accessibilité à ces événements, la question des personnes atteintes de surdité se pose. Comment faire en sorte pour qu'elles aussi puissent ressentir la musique ? ”
                </p>      
            </div>
            
            <div class="article2">
                <div class="txt2">
                    <p>
                    "Découvrez le regard unique de Charly Gibelind, directeur de l'association CESENS, sur la musique et la surdité. À travers cet entretien, plongez dans les nuances de la relation complexe entre les personnes sourdes et la musique, explorant ainsi les différentes facettes de cette interaction."                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require_once '../../footer.php'; ?>

</html>
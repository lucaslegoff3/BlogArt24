<?php
require_once '../../header.php';
sql_connect();
?>

    <div id="modal">
        <div class="mask"></div>
        <div class="container">
            <div class="message"></div>
            <a href="#" class="close">&times;</a>
        </div>
    </div>
        
    <div class="formulaire">
    <H1 class="inscrivezvous">Inscrivez-vous</H1>
    <hr>
        <div class="mail">
            <p><H2>E-Mail</H2></p>
            <div class="email">
                <input type="email" id="name" name="name" required minlength="0" maxlength="" size="40" placeholder="Email"/>
            </div>
        </div>   

        <div class="mdp">
            <p><H2>Mot de passe</H2></p>
            <input type="password" id="name" name="name" required minlength="6" maxlength="25" size="40" placeholder="Mot de passe (6 caractères minimum)"/>
        </div>

        <div class="confirmer mdp">
            <p><H2>Confirmer mot de passe</H2></p>
            <input type="password" id="name" name="name" required minlength="6" maxlength="25" size="40" placeholder="Confirmation"/>
        </div>  

        <div class="afficher_mdp">
            <!-------------------------------- rjt carré afficher mdp + txt à gauche ------------------------------------------->
            <p>Afficher le mot de passe</p>
        </div>        

        <div class="bouton1">
            <p><a class="bouton" type="button" href="#">S'inscrire</a></p>
        </div>  

        <p class="encliquant">En cliquant sur « S'inscrire », vous confirmez que vous acceptez les Conditions générales d'utilisation et notre Politique de confidentialité qui vous informe des modalités de traitement de vos données personnelles ainsi que de vos droits sur ces données.
        </p>
    </div>
    
        <!-------------------------------- rjt bouton inscrire + txt + ombre ------------------------------------------->
        
<?php require_once '../../footer.php'; ?>

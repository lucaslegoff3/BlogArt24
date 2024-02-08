<?php require_once '../../header.php'; ?>

<body>
    <div class="formulaire">
        <H1 class="inscrivezvous">Contactez-nous !</H1>
        <hr>
        <div class="Nom_prenom_mail">
            <input type="text" id="name" name="name" required minlength="0" maxlength="20" size="40" value="Nom"/>
            <input type="text" id="name" name="name" required minlength="0" maxlength="20" size="40" value="Prénom"/>
            <input type="text" id="name" name="name" required minlength="0" maxlength="20" size="40" value="Email"/>
        </div>

    <div class="Message">
        <H2>Message</H2>
        <div class="ObjetMess">
            <input type="text" id="name" name="name" required minlength="0" maxlength="20" size="40" value="Objet"/>
        </div>   

        Votre message...
    </div>

        <div class="bouton1">
            <input class="bouton" type="button" value="Envoyer le formulaire" />
        </div>  
    </div>
    <!-------------------------------- Ligne à rjt CSS ------------------------------------------->
    <div id="modal">
        <div class="mask"></div>
        <div class="container">
            <div class="message"></div>
            <a href="#" class="close">&times;</a>
        </div>
    </div>

    

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
            <H2>E-Mail</H2>

            <input type="text" id="name" name="name" required minlength="0" maxlength="20" size="40" value="Email"/>
        </div>   

        <div class="mdp">
            <H2>Mot de passe</H2>
            <input type="text" id="name" name="name" required minlength="6" maxlength="25" size="40" value="Mot de passe (6 caractères minimum)"/>
        </div>

        <div class="confirmer mdp">
            <H2>Confirmer mot de passe</H2>
            <input type="text" id="name" name="name" required minlength="6" maxlength="25" size="40" value="Confirmation"/>
        </div>  

        <div class="afficher mdp">
            <!-------------------------------- rjt carré afficher mdp + txt à gauche ------------------------------------------->
            Afficher le mot de passe
        </div>        

        <div class="bouton1">
        <input class="bouton" type="button" value="S'inscrire" />
        </div>  
        <p class="encliquant">En cliquant sur « S'inscrire », vous confirmez que vous acceptez les Conditions générales d'utilisation et notre Politique de confidentialité qui vous informe des modalités de traitement de vos données personnelles ainsi que de vos droits sur ces données.
        </p>
    </div>
    
        <!-------------------------------- rjt bouton inscrire + txt + ombre ------------------------------------------->
      
</body>

</html>  
<?php require_once '../../footer.php'; ?>

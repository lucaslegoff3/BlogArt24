<?php
require_once '../../header.php';
sql_connect();
?>
    <div class="formulaire">
        <div class="connect">
            <H1>Connectez-vous</H1>
        </div>
        <hr>

        <div class="mail">
            <H2>E-Mail</H2>
            <input type="text" id="name" name="name" required minlength="0" maxlength="" size="10" placeholder="Nom"/>
        </div>

        <div class="mdp">
            <H2>Mot de passe</H2>
            <input type="text" id="name" name="name" required minlength="6" maxlength="25" size="10" placeholder="Mot de passe"/>
        </div>

        <div class="bouton_3">
            <p><input class="bouton" type="button" value="Se connecter" /></p>
        </div>

        <div class="mdp_oublie">
            <img src="../src/images/Groupe_47.png">
            <p>Mot de passe oublié ?</p>
        </div>

        <Hr>

        <H3>Vous n'êtes pas encore inscrit ?</H3>
        <div class="inscription">
            <img src="../src/images/Groupe_47.png">
            <p>Inscrivez-vous ici</p>
        </div>
    </div>

    <?php require_once '../../footer.php'; ?>
<?php
require_once '../../header.php';
sql_connect();
?>
    <div class="formulaire">
        <div class="connect">
            <br>
            <H1>Connectez-vous</H1>
        </div>
        <hr>

        <div class="mail">
            <H2>E-Mail</H2>
            <input type="email" id="name" name="name" required minlength="0" maxlength="" size="10" placeholder="Nom"/>
        </div>

        <div class="mdp">
            <H2>Mot de passe</H2>
            <input type="password" id="name" name="name" required minlength="6" maxlength="25" size="10" placeholder="Mot de passe"/>
        </div>

        <div class="bouton_3">
            <p><a href="" class="bouton" type="button">Se connecter</a></p>
        </div>

        <div class="mdp_oublie">
            <img src="/src/images/Group_47.png">
            <a href="forgotpassword.php" class="white">Mot de passe oublié ?</a>
        </div>

        <Hr>

        <H3>Vous n'êtes pas encore inscrit ?</H3>
        <div class="inscription">
            <img src="/src/images/Group_47.png">
            <a href="inscription.php", class="white">Inscrivez-vous ici</p>
        </div>
    </div>

    <?php require_once '../../footer.php'; ?>

    <style>
        .white{
            color:black
        }
    </style>
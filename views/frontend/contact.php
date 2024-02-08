<?php require_once '../../header.php'; ?>

<body>
    <div class="formulaire">
        <H1 class="contact">Contactez-nous !</H1>
        <hr>
        <div class="nom_prenom">
            <div class="nom">
                <input type="text" id="name2" name="name2" required minlength="0" maxlength="" size="10" placeholder="Nom"/>
            </div>
            <div class="prenom">
                <input type="text" id="name2" name="name2" required minlength="0" maxlength="" size="20" placeholder="Prénom"/>
            </div>
        </div>
        <div class="insertemail">
            <input type="text" id="name2" name="name2" required minlength="0" maxlength="" size="40" placeholder="Email"/>
        </div>

        <div class="Message">
            <H2>Message</H2>
        </div>
        <div class="ObjetMess">
            <input type="text" id="name2" name="name2" required minlength="0" maxlength="20" size="15" placeholder="Objet du message"/>
        </div>

        <div class="message">
            <input type="text" id="name3" name="name3" required minlength="0" maxlength="" size="" placeholder="Votre message..."/>
        </div>

        <div class="encliquant">
            <input class="bouton" type="button" value="Envoyer le formulaire" />
        </div>
    </div>

</body>


<?php require_once '../../footer.php'; ?>
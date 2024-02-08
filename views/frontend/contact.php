<?php require_once '../../header.php'; ?>

<body>
    <div class="formulaire">
        <H1 class="inscrivezvous">Contactez-nous !</H1>
        <hr>
        <div class="Nom">
            <input type="text" id="name" name="name" required minlength="0" maxlength="20" size="40" placeholder="Nom"/>
        </div>
        <div class="Prenom">
            <input type="text" id="name" name="name" required minlength="0" maxlength="20" size="40" placeholder="Prénom"/>
        <div class="insertemail">
            <input type="text" id="name" name="name" required minlength="0" maxlength="20" size="40" placeholder="Email"/>
        </div>

        <div class="Message">
            <H2>Message</H2>
        </div>
        <div class="ObjetMess">
            <input type="text" id="name" name="name" required minlength="0" maxlength="20" size="40" placeholder="Objet du message"/>
        </div>   

        <div class="message">
            <input type="text" id="name" name="name" required minlength="0" maxlength="20" size="40" placeholder="Votre message..."/>
        </div>   

        <div class="bouton1">
            <input class="bouton" type="button" value="Envoyer le formulaire" />
        </div>  
    </div>
    
</body>


<?php require_once '../../footer.php'; ?>

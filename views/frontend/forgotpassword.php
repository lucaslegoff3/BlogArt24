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
    <H1 class="inscrivezvous">Mot de passe oublié</H1>
    <hr>
        <div class="mail">
            <p><H2>E-Mail</H2></p>
            <div class="email">
                <input type="email" id="name" name="name" required minlength="0" maxlength="" size="40" placeholder="Email"/>
            </div>
        </div>   

        <div class="bouton1">
            <p><a class="bouton" type="button" href="#">Recevoir code reset mot de passe</a></p>
        </div>  
    </div>
    
        <!-------------------------------- rjt bouton inscrire + txt + ombre ------------------------------------------->
        
<?php require_once '../../footer.php'; ?>

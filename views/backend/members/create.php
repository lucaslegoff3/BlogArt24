<?php
include '../../../header.php';
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création d'un nouveau membre</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/members/create.php' ?>" method="post" id="form-recaptcha">
                <div class="form-group">
                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemb" name="prenomMemb" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <br />
                <div class="form-group">
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" name="nomMemb" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <br />
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <div>
                        <p>(Entre 6 et 70 caractères)</p>
                    </div>
                <br />
                <div class="form-group">
                    <label for="passMemb1">Mot de passe</label>
                    <input id="passMemb1" name="passMemb1" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <br />
                <div class="form-group">
                    <label for="passMemb2">Confirmez le Mot de passe</label>
                    <input id="passMemb2" name="passMemb2" class="form-control" type="text" autofocus="autofocus" />
                </div>
                    <div>
                        <p>(Entre 8 et 15 caractères, au moins une majuscule, une minuscule, un chiffre, caractère spéciaux acceptés)</p>
                    </div>
                <br />
                <div class="form-group">
                        <label for="email1">E-mail</label>
                        <input id="email1" name="email1" class="form-control" type="email" autofocus="autofocus" />
                </div>
                <div class="form-group">
                        <label for="email2">Confirmez l'E-mail</label>
                        <input id="email2" name="email2" class="form-control" type="email" />
                </div>
                <br/>
                <div>
                    <label for=1>J'accepte la conservation de mes données lors de la création de mon compte</label>
                        <input type="checkbox" name="verif"> 
                </div>
                <br />
                <button class="g-recaptcha" data-sitekey='6Ldmi2opAAAAANf3XADMXOS7LzoQFTaXpAu3G6pp'
                                data-callback='onSubmit' data-action='submit'>Confirmer la création ?
                </button>

            </form>
        </div>
    </div>
</div>
<script>
        function onSubmit(token) {
            document.getElementById("form-recaptcha").submit();
        }
    </script>
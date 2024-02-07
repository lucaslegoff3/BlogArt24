<?php
include '../../../header.php';
include '../../../api/articles/create.php';



?>
<html>

<head>
    <meta charset="UTF-8">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="preload" href="members.js" as="script">
    <script src="members.js" preload></script>
</head>

<body>
    <h1>Création nouveau membre</h1>
    <form action="../../../api/articles/create.php" method="post" style="padding: 2vw;">
        <div class="form-group">
            <label for="pseudo">Pseudonyme (non modifiable)</label>
            <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
            </div>
        </div>
        <div class="form-group">
            <label for="password">mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
            <p>Le mot de passe doit faire entre 8 et 15 caractères et contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial.</p>
            <input type="checkbox" onclick="togglePassword('password')"> Afficher Mot de passe
            <div class="form-group">
                <label for="confirm_password">Confirmez le mot de passe</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirmez le mot de passe">
                <input type="checkbox" onclick="togglePassword('confirm_password')"> Afficher Mot de passe
            </div>
        </div>
        <div class="form-group">
            <label for="email">eMail</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">

            <div class="form-group">
                <label for="confirm_email">Confirmez email</label>
                <input type="email" class="form-control" name="confirm_email" id="confirm_email" placeholder="Confirmez l'email">
            </div>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="accord" name="accord" value="1">
            <label class="form-check-label" for="accord">J'accepte que mes données soient conservées</label>
        </div>
        <div class="form-group">
            <label for="recaptcha">reCAPTCHA</label>
            <div class="g-recaptcha" data-sitekey="6LfpN2QpAAAAAF6lmuCFTukw2i8AiG0Ehb8BbBFq" data-callback="enableSubmitButton"></div>
        </div>

        <button type="submit" class="btn btn-primary" id="submitBtn" disabled>S'inscrire</button>
    </form>
</body>

</html>

<?php
include '../../../footer.php';

<?php

include '../../../header.php';

$numMemb = $_GET['numMemb'];

$membres = sql_select("membre INNER JOIN statut on membre.numStat = statut.numStat", "*", "numMemb = $numMemb");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numMemb = $_GET['numMemb'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (!empty($password)) {
        $hashedPassword = sha1($password);
        sql_update("membre", "prenomMemb = '$prenom', nomMemb = '$nom', passMemb = '$hashedPassword', eMailMemb = '$email'", "numMemb = $numMemb");
    } else {
        sql_update("membre", "prenomMemb = '$prenom', nomMemb = '$nom', eMailMemb = '$email'", "numMemb = $numMemb");
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="preload" href="code.js" as="script">
    <script src="code.js" preload></script>
</head>

<body>
    <div class="container">
        <form action="" method="post" style="padding: 2vw;">
            <div class="form-group">
                <label for="pseudo">Numéro</label>
                <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo" value="<?php echo $membres[0]['numMemb']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="pseudo">Pseudonyme (non modifiable)</label>
                <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo" value="<?php echo isset($membres[0]['pseudoMemb']) ? $membres[0]['pseudoMemb'] : ''; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" value="<?php echo isset($membres[0]['prenomMemb']) ? $membres[0]['prenomMemb'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="<?php echo isset($membres[0]['nomMemb']) ? $membres[0]['nomMemb'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" value="">
                <p>Le mot de passe doit faire entre 8 et 15 caractères et contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial.</p>
                <input type="checkbox" default="" onclick="togglePassword('password')"> Afficher Mot de passe
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirmez le mot de passe</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirmez le mot de passe" value="">
                <input type="checkbox" default="" onclick="togglePassword('confirm_password')"> Afficher Mot de passe
            </div>
            <div class="form-group">
                <label for="email">eMail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo isset($membres[0]['eMailMemb']) ? $membres[0]['eMailMemb'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="confirm_email">Confirmez email</label>
                <input type="email" class="form-control" name="confirm_email" id="confirm_email" placeholder="Confirmez l'email" value="<?php echo isset($membres[0]['eMailMemb']) ? $membres[0]['eMailMemb'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="prenom">Statut</label>
                <input type="text" class="form-control" name="statut" id="statut" placeholder="" value="<?php echo $membres[0]['libStat']; ?>">
            </div>
            <div class="form-group">
                <label for="recaptcha">reCAPTCHA</label>
                <div class="g-recaptcha" data-sitekey="6LfpN2QpAAAAAF6lmuCFTukw2i8AiG0Ehb8BbBFq" data-callback="enableSubmitButton"></div>
            </div>

            <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Modifier</button>
        </form>

    </div>
</body>

</html>

<?php
include '../../../footer.php';
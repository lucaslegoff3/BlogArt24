<?php
include '../../../header.php';


function verifierMotDePasse($motDePasse) {
    $taille = strlen($motDePasse) >= 8 && strlen($motDePasse) <= 15;
    $majuscule = preg_match('/[A-Z]/', $motDePasse);
    $minuscule = preg_match('/[a-z]/', $motDePasse);
    $chiffre = preg_match('/[0-9]/', $motDePasse);
    $special = preg_match('/[^A-Za-z0-9]/', $motDePasse);
    return $taille && $majuscule && $minuscule && $chiffre && $special;
}


if (isset($_POST["pseudo"], $_POST["password"], $_POST["confirm_password"], $_POST["prenom"], $_POST["nom"], $_POST["email"], $_POST["confirm_email"], $_POST["accord"])) {
    $pseudoMemb = $_POST["pseudo"];
    $passMemb = $_POST["password"];
    $confirmPassMemb = $_POST["confirm_password"];
    $prenomMemb = $_POST["prenom"];
    $nomMemb = $_POST["nom"];
    $eMailMemb = $_POST["email"];
    $confirmEmailMemb = $_POST["confirm_email"];
    $accordMemb = $_POST["accord"];
    $dtCreaMemb = date("Y-m-d H:i:s");

    if (!empty($pseudoMemb) && !empty($passMemb) && !empty($confirmPassMemb) && !empty($prenomMemb) && !empty($nomMemb) && !empty($eMailMemb) && !empty($confirmEmailMemb) && !empty($accordMemb)) {
        if (verifierMotDePasse($passMemb)) {
            if ($passMemb === $confirmPassMemb) {
                if ($eMailMemb === $confirmEmailMemb) {
                    $checkPseudoQuery = $bdd->prepare("SELECT COUNT(*) FROM membre WHERE pseudoMemb = :pseudo");
                    $checkPseudoQuery->bindValue(":pseudo", $pseudoMemb, PDO::PARAM_STR);
                    $checkPseudoQuery->execute();
                    $pseudoExists = $checkPseudoQuery->fetchColumn();
                    $checkEmailQuery = $bdd->prepare("SELECT COUNT(*) FROM membre WHERE eMailMemb = :email");
                    $checkEmailQuery->bindValue(":email", $eMailMemb, PDO::PARAM_STR);
                    $checkEmailQuery->execute();
                    $emailExists = $checkEmailQuery->fetchColumn();
                    if ($pseudoExists) {
                        echo "Ce pseudo est déjà utilisé.";
                    } elseif ($emailExists) {
                        echo "Cet email est déjà utilisé.";
                    } else {
                        $passMemb_sha1 = sha1($passMemb);
                        $numStat = 3;
                        $dtMajMemb = null;
                        $request = $bdd->prepare("INSERT INTO membre (prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, accordMemb, numStat, dtMajMemb) VALUES (:prenom, :nom, :pseudo, :password, :email, :dtCreaMemb, :accord, :numStat, :dtMajMemb)");
                        $request->bindValue(":prenom", $prenomMemb, PDO::PARAM_STR);
                        $request->bindValue(":nom", $nomMemb, PDO::PARAM_STR);
                        $request->bindValue(":pseudo", $pseudoMemb, PDO::PARAM_STR);
                        $request->bindValue(":password", $passMemb_sha1, PDO::PARAM_STR);
                        $request->bindValue(":email", $eMailMemb, PDO::PARAM_STR);
                        $request->bindValue(":dtCreaMemb", $dtCreaMemb, PDO::PARAM_STR);
                        $request->bindValue(":accord", $accordMemb, PDO::PARAM_INT);
                        $request->bindValue(":numStat", $numStat, PDO::PARAM_INT);
                        $request->bindValue(":dtMajMemb", $dtMajMemb, PDO::PARAM_STR);
                        $request->execute();
                        if ($request->rowCount() > 0) {
                            header("Location: login.php");
                            exit();
                        } else {
                            echo "Erreur lors de l'enregistrement du mot de passe.";
                        }
                    }
                } else {
                    echo "Les adresses email ne correspondent pas.";
                }
            } else {
                echo "Les mots de passe ne correspondent pas.";
            }
        } else {
            echo "Le mot de passe doit faire entre 8 et 15 caractères et contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial.";
        }
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}

?>
<html>

<head>
    <meta charset="UTF-8">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="preload" href="members.js" as="script">
    <script src="members.js" preload></script>
</head>

<body>
    <h1>S’INSCRIRE</h1>
    <form action="" method="post" style="padding: 2vw;">
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
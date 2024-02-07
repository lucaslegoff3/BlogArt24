<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libArt = ctrlSaisies($_POST['libArt']);

sql_insert('ARTICLES', 'libArt', $libArt);


header('Location: ../../views/backend/articles/list.php');


function verifierMotDePasse($motDePasse)
{
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

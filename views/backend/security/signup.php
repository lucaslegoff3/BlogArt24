<?php
include '../../../header.php';

global $DB;

if (isset($_GET["activation"])) {
    $activation = $_GET["activation"];

    $sql = "SELECT * FROM inscription WHERE code_email = :code_email";
    $stmt = $bdd->prepare($sql);
    $stmt->execute(['code_email' => $activation]);

    if ($stmt->rowCount() != 0) {
        $sql = "UPDATE inscription SET code_email = NULL WHERE code_email = :code_email";
        $stmt = $bdd->prepare($sql);
        $stmt->execute(['code_email' => $activation]);
    }
}

if (isset($_POST["envoyer"])) {
    $pseudo = $_POST["pseudonyme"];
    $password = $_POST["mot_de_passe"];
    $email = $_POST["email"];

    if (!empty($pseudo) && !empty($password) && !empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (strlen($password) >= 8) {
                $sql = "SELECT * FROM inscription WHERE pseudo = :pseudo";
                $stmt = $bdd->prepare($sql);
                $stmt->execute(['pseudo' => $pseudo]);

                if ($stmt->rowCount() == 0) {
                    $password_hash = sha1($password);
                    $email_hash = password_hash(time(), PASSWORD_DEFAULT);
                    var_dump($email_hash);

                    $sql = "INSERT INTO inscription (pseudo, password, email, code_email) VALUES (:pseudo, :password_hash, :email , :code_email)";
                    $stmt = $bdd->prepare($sql);
                    $success = $stmt->execute(['pseudo' => $pseudo, 'password_hash' => $password_hash, "email" => $email, "code_email" => $email_hash]);

                    if ($success) {
                        envoyerMail($email, $email_hash);
                        echo "Inscription réussie";
                    } else {
                        $errorInfo = $stmt->errorInfo();
                        echo "Erreur : " . $errorInfo[2];
                    }
                } else {
                    echo "Le pseudo existe déjà";
                }
            } else {
                echo "Le mot de passe doit contenir au moins 8 caractères";
            }
        } else {
            echo "L'adresse email n'est pas valide.";
        }
    } else {
        echo "Veuillez remplir tous les champs";
    }
}

function envoyerMail($email, $code_activation)
{
    $to      = $email;
    $subject = 'Inscription';
    $message = 'Bonjour ! Voici votre code : <a href="http://blogart/views/backend/security/signup.php?activation=' . $code_activation . '">Activez votre compte</a>';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    //Va envoyer un mail
    echo ($message);
    //mail($to, $subject, $message, $headers);
}
?>
<html>

<body style=text-align:center>


    <h1>Inscription</h1>
    <form id="recaptcha" action="signup.php" method="post">
        <input type="text" name="pseudonyme" placeholder="Pseudo"><br>
        <input type="password" name="mot_de_passe" placeholder="Mot de passe"><br>
        <input type="mail" name="email" placeholder="Adresse e-mail"><br>
        <input type="submit" name="envoyer" value="Envoyer">
    </form>

</body>

</html>
<?php
include '../../../header.php';

global $DB;

if(isset($_POST["envoyer"])) {
    $pseudo = $_POST["pseudonyme"];
    $password = $_POST["mot_de_passe"];

    if (!empty($pseudo) && !empty($password)) {
        if(strlen($password) >= 8) {
            $sql = "SELECT * FROM inscription WHERE pseudo = :pseudo";
            $stmt = $DB->prepare($sql);
            $stmt->execute(['pseudo' => $pseudo]);

            if ($stmt->rowCount() == 0) {
                $password_hash = sha1($password);
                $sql = "INSERT INTO inscription (pseudo, password) VALUES (:pseudo, :password_hash)";
                $stmt = $DB->prepare($sql);
                $success = $stmt->execute(['pseudo' => $pseudo, 'password_hash' => $password_hash]);

                if ($success) {
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
        echo "Veuillez remplir tous les champs";
    }
}
?>

<body>
    <h1>Inscription</h1>
    <form action="signup.php" method="post">
        <input type="text" name="pseudonyme" placeholder="Pseudo"><br>
        <input type="password" name="mot_de_passe" placeholder="Mot de passe"><br>
        <input type="submit" name="envoyer" value="Envoyer">
    </form>
</body>
</html>

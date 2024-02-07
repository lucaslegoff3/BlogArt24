<?php

include '../../../header.php';


$numMemb = $_GET['numMemb'];

$membres = sql_select("membre INNER JOIN statut on membre.numStat = statut.numStat", "*", "numMemb = $numMemb");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numMemb = $_POST['numMemb'];
    $deleteQuery = "DELETE FROM membre WHERE numMemb = :numMemb";
    $deleteStmt = $pdo->prepare($deleteQuery);
    $deleteStmt->bindParam(':numMemb', $numMemb);
    $deleteStmt->execute();
    header("Location: delete.php");
    exit();
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
                <div class="form-group">
                    <label for="number">Numéro</label>
                    <input type="text" class="form-control" name="number" id="number" placeholder="Numéro" value="<?php echo $membres[0]['numMemb']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="pseudo">Pseudonyme (non modifiable)</label>
                    <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo" value="<?php echo isset($membres[0]['pseudoMemb']) ? $membres[0]['pseudoMemb'] : ''; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" value="<?php echo isset($membres[0]['pseudoMemb']) ? $membres[0]['pseudoMemb'] : ''; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="<?php echo isset($membres[0]['nomMemb']) ? $membres[0]['nomMemb'] : ''; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">eMail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo isset($membres[0]['eMailMemb']) ? $membres[0]['eMailMemb'] : ''; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="confirm_email">Confirmez email</label>
                    <input type="email" class="form-control" name="confirm_email" id="confirm_email" placeholder="Confirmez l'email" value="<?php echo isset($membres[0]['eMailMemb']) ? $membres[0]['eMailMemb'] : ''; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="statut">Statut</label>
                    <input type="text" class="form-control" name="statut" id="statut" placeholder="Statut" value="<?php echo $membres[0]['libStat']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="recaptcha">reCAPTCHA</label>
                    <div class="g-recaptcha" data-sitekey="6LfpN2QpAAAAAF6lmuCFTukw2i8AiG0Ehb8BbBFq" data-callback="enableSubmitButton"></div>
                </div>

                <button type="submit" class="btn btn-danger" id="submitBtn" disabled>Supprimer</button>
        </form>

    </div>
</body>

</html>

<?php
include '../../../footer.php';

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$prenomMemb = ctrlSaisies($_POST['prenomMemb']);
$nomMemb = ctrlSaisies($_POST['nomMemb']);
$pseudoMemb = ctrlSaisies($_POST['pseudoMemb']);
$passMemb1 = ctrlSaisies($_POST['passMemb1']);
$passMemb2 = ctrlSaisies($_POST['passMemb2']);
// Regex pour valider le mot de passe
$regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$/';
$email1 = ctrlSaisies($_POST['email1']);
$email2 = ctrlSaisies($_POST['email2']);
$dtCreaMemb = date("Y-m-d H:i:s");
if (isset ($_POST['verif'])) {
    $verif =  ctrlSaisies($_POST['verif']);
}




if (strlen($prenomMemb) == 0 ) {
    echo "Le prenom doit être saisi obligatoirement";
    exit();
}
if (strlen($nomMemb) == 0 ) {
    echo "Le nom doit être saisi obligatoirement";
    exit();
}

if (strlen($pseudoMemb) < 6 || strlen($pseudoMemb) > 70) {
    echo "Le pseudo doit avoir entre 6 et 70 caractères.";
    exit();
}

$pseudoExist = sql_select("MEMBRE", "*", "pseudoMemb = '$pseudoMemb'");
if (!empty($pseudoExist)) {
    die("Ce pseudo est déjà utilisé.");
}


if (preg_match($regex, $passMemb1) && preg_match($regex, $passMemb2)) {
    if ($passMemb1 !== $passMemb2) {
        // Cryptage du mot de passe avec password_hash()
        $hashedPassword = password_hash($passMemb1, PASSWORD_DEFAULT);
        
        echo "Les mots de passe ne correspondent pas. Veuillez entrer des mots de passe identiques.";
        exit();
    } 
} else {
    echo "Veuillez entrer des mots de passe valides.";
    exit();
}

// Validation des adresses e-mail
if (!filter_var($email1, FILTER_VALIDATE_EMAIL) || !filter_var($email2, FILTER_VALIDATE_EMAIL)) {
    die("Veuillez entrer des adresses valides");
} 

if ($email1 !== $email2) {
    echo "Les adresses e-mail ne correspondent pas. Veuillez entrer des adresses e-mail identiques.";
    exit();
}   

if (!isset($verif)){
    echo "Vous devez cocher case en bas de page";
    exit();
}

//capchat 

$url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => '6Lejz2spAAAAAL14qPVeeFUpUpc-NzovMoej29OH',
        'response' => $_POST['g-recaptcha-response']
    );
    $options = array(
        'http' => array (
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success=json_decode($verify);
    if ($captcha_success->success==false) {
        echo "<p>You are a bot! Go away!</p>";
        exit;
    } else if ($captcha_success->success==true) {
        echo "<p>You are not a bot!</p>";
    }

else{
    echo "no data";
}


sql_insert('membre', "prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, numStat", 
                    "'$prenomMemb', '$nomMemb', '$pseudoMemb', '$passMemb1', '$email1', '$dtCreaMemb', '3'");

header('Location: ../../views/backend/members/list.php');
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

if (isset($_GET['numMemb'])) {
    $numMemb = ctrlSaisies($_POST['numMemb']);

    sql_delete('MEMBRE', "numMemb = $numMemb");

    header('Location: ../../views/backend/members/list.php');
    exit();
} else {
    echo "L'id du membre à supprimer n'est pas spécifié.";
    exit();
}
?>
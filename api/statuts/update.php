<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libStat = ctrlSaisies($_POST['libStat']);
$numStat = ctrlSaisies($_POST['numStat']);


sql_update('STATUT', 'libStat ="'. $libStat .'"', 'numStat =' . $numStat);

header('Location: ../../views/backend/statuts/list.php');
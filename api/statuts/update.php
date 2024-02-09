<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libStat = addslashes($_POST['libStat']);
$numStat = addslashes($_POST['numStat']);

sql_update('STATUT', 'libStat ="' . $libStat . '"', 'numStat =' . $numStat);

header('Location: ../../views/backend/statuts/list.php');

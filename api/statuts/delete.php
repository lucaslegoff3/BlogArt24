<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numStat = addslashes($_POST['numStat']);

sql_delete('STATUT', "numStat = $numStat");

header('Location: ../../views/backend/statuts/list.php');

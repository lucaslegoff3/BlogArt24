<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libStat = addslashes($_POST['libStat']);

sql_insert('STATUT', 'libStat', '"' . $libStat . '"');

header('Location: ../../views/backend/statuts/list.php');

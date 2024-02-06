<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numKeys = ctrlSaisies($_POST['numKeyw']);

sql_delete('KEYWORDS', "numKeyw = $numKeyw");

header('Location: ../../views/backend/keywords/list.php');
?>
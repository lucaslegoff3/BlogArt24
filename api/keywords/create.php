<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libKeyw = ctrlSaisies($_POST['libKeyw']);

sql_insert('KEYWORDS', 'libKeyw', $libKeyw);


header('Location: ../../views/backend/keywords/list.php');
?>
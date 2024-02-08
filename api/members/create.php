<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libMemb = ctrlSaisies($_POST['libMemb']);

sql_insert('MEMBRE', 'libMemb', $libMemb);


header('Location: ../../../views/backend/members/list.php');*/

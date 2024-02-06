<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libThem = ctrlSaisies($_POST['libThem']);
$numThem = ctrlSaisies($_POST['numThem']);


sql_update('THEMATIQUE', 'libThem ="'. $libThem .'"', 'numThem =' . $numThem);

header('Location: ../../views/backend/thematiques/list.php');
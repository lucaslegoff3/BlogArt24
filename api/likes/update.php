<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libLike = ctrlSaisies($_POST['libLike']);
$numLike = ctrlSaisies($_POST['numLike']);


sql_update('LIEKART', 'libLike ="' . $libLike . '"', 'numLike =' . $numLike);

header('Location: ../../views/backend/likes/list.php');

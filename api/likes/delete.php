<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numLike = ctrlSaisies($_POST['numLike']);

sql_delete('LIKEART', "numLike = $numLike");

header('Location: ../../views/backend/likes/list.php');

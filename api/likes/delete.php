<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numLike = ctrlSaisies($_POST['numLike']);

sql_delete('LIKES', "numLike = $numLike");

header('Location: ../../views/backend/likes/list.php');
?>
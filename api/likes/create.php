<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libLikes = ctrlSaisies($_POST['libLikes']);

sql_insert('LIKEART', 'libLikes', '"' . $libLikes . '"');


header('Location: ../../views/backend/likes/list.php');

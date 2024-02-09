<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libLikes = addslashes($_POST['libLikes']);

sql_insert('LIKEART', 'libLikes', '"' . $libLikes . '"');

header('Location: ../../views/backend/likes/list.php');

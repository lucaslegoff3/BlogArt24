<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libArt = ctrlSaisies($_POST['libArt']);

sql_insert('ARTICLES', 'libArt', $libArt);


header('Location: ../../views/backend/articles/list.php');
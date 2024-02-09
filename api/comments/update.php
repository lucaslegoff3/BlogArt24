<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libCom = ctrlSaisies($_POST['libCom']);
$numCom = ctrlSaisies($_POST['numCom']);


sql_update('Com', 'libCom ="' . $libCom . '"', 'numCom =' . $numCom);

header('Location: ../../views/backend/comments/list.php');

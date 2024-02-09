<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libCom = addslashes($_POST['libCom']);
$numCom = addslashes($_POST['numCom']);


sql_update('Com', 'libCom ="' . $libCom . '"', 'numCom =' . $numCom);

header('Location: ../../views/backend/comments/list.php');

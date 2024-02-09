<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numCom = addslashes($_POST['numCom']);

sql_delete('COMMENT', "numCom = $numCom");

header('Location: ../../views/backend/comments/list.php');

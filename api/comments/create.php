<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libCom = addslashes($_POST['libCom']);

sql_insert('COMMENTS', 'libCom', $libCom);

header('Location: ../../views/backend/comments/list.php');

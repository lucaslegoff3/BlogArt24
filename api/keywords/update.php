<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libMotCle = addslashes($_POST['libMotCle']);
$numMotCle = addslashes($_POST['numMotCle']);


sql_update('MOTCLE', 'libMotCle ="' . $libMotCle . '"', 'numMotCle =' . $numMotCle);

header('Location: ../../views/backend/keywords/list.php');

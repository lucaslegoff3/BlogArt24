<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libMotCle = ctrlSaisies($_POST['libMotCle']);
$numMotCle = ctrlSaisies($_POST['numMotCle']);


sql_update('MOTCLE', 'libMotCle ="'. $libMotCle .'"', 'numMotCle =' . $numMotCle);

header('Location: ../../views/backend/keywords/list.php');
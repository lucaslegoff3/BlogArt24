<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';
date_default_timezone_set('UTC+1');
$numMemb     = ctrlSaisies($_GET['numMemb']);
$pseudoMemb = ctrlSaisies($_POST['pseudoMemb']);
$prenomMemb = ctrlSaisies($_POST['prenomMemb']);
$nomMemb = ctrlSaisies($_POST['nomMemb']);
$eMailMemb = ctrlSaisies($_POST['eMailMemb']);
$numStat = ctrlSaisies($_POST['numStat']);
$passMemb = ctrlSaisies($_POST['passMemb']);
//$confirm_password = ctrlSaisies($_POST['confirm_password']);

//if (($password==$confirm_password) && ())


sql_update('MEMBRE', "`pseudoMemb`='$pseudoMemb',`prenomMemb`='$prenomMemb',`nomMemb`='$nomMemb',`eMailMemb`='$eMailMemb',`numStat`='$numStat',`passMemb`='$passMemb'", "`numMemb`='$numMemb'");

header('Location: ../../views/backend/members/list.php');
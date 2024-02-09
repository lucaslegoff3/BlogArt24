<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

date_default_timezone_set('UTC+1');
$numMemb     = addslashes($_GET['numMemb']);
$pseudoMemb = addslashes($_POST['pseudoMemb']);
$prenomMemb = addslashes($_POST['prenomMemb']);
$nomMemb = addslashes($_POST['nomMemb']);
$eMailMemb = addslashes($_POST['eMailMemb']);
$numStat = addslashes($_POST['numStat']);
$passMemb = addslashes($_POST['passMemb']);
//$confirm_password = addslashes($_POST['confirm_password']);

//if (($password==$confirm_password) && ())


sql_update('MEMBRE', "`pseudoMemb`='$pseudoMemb',`prenomMemb`='$prenomMemb',`nomMemb`='$nomMemb',`eMailMemb`='$eMailMemb',`numStat`='$numStat',`passMemb`='$passMemb'", "`numMemb`='$numMemb'");

header('Location: ../../views/backend/members/list.php');